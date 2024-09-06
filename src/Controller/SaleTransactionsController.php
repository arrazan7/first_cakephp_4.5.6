<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * SaleTransactions Controller
 *
 * @property \App\Model\Table\SaleTransactionsTable $SaleTransactions
 * @method \App\Model\Entity\SaleTransaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SaleTransactionsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->SaleTransactions = $this->fetchTable('SaleTransactions');  // Inisialisasi model
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Customers', 'Stocks'],
        ];
        $saleTransactions = $this->paginate($this->SaleTransactions);

        $this->set(compact('saleTransactions'));
    }

    /**
     * View method
     *
     * @param string|null $id Sale Transaction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleTransaction = $this->SaleTransactions->get($id, [
            'contain' => ['Employees', 'Customers', 'Stocks'],
        ]);

        $this->set(compact('saleTransaction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleTransaction = $this->SaleTransactions->newEmptyEntity();
        if ($this->request->is('post')) {
            $saleTransaction = $this->SaleTransactions->patchEntity($saleTransaction, $this->request->getData());
            if ($this->SaleTransactions->save($saleTransaction)) {
                $this->Flash->success(__('The sale transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale transaction could not be saved. Please, try again.'));
        }
        $employees = $this->SaleTransactions->Employees->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $customers = $this->SaleTransactions->Customers->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $stocks = $this->SaleTransactions->Stocks->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $this->set(compact('saleTransaction', 'employees', 'customers', 'stocks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale Transaction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleTransaction = $this->SaleTransactions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleTransaction = $this->SaleTransactions->patchEntity($saleTransaction, $this->request->getData());
            if ($this->SaleTransactions->save($saleTransaction)) {
                $this->Flash->success(__('The sale transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale transaction could not be saved. Please, try again.'));
        }
        $employees = $this->SaleTransactions->Employees->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $customers = $this->SaleTransactions->Customers->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $stocks = $this->SaleTransactions->Stocks->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $this->set(compact('saleTransaction', 'employees', 'customers', 'stocks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale Transaction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleTransaction = $this->SaleTransactions->get($id);
        if ($this->SaleTransactions->delete($saleTransaction)) {
            $this->Flash->success(__('The sale transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The sale transaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
