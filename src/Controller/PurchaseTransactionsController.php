<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * PurchaseTransactions Controller
 *
 * @property \App\Model\Table\PurchaseTransactionsTable $PurchaseTransactions
 * @method \App\Model\Entity\PurchaseTransaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PurchaseTransactionsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->PurchaseTransactions = $this->fetchTable('PurchaseTransactions');  // Inisialisasi model
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Purchases'],
        ];
        $purchaseTransactions = $this->paginate($this->PurchaseTransactions);

        $this->set(compact('purchaseTransactions'));
    }

    public function latihan()
    {
        // Tangkap start_date dan end_date dari query string
        $startDate = $this->request->getQuery('start_date');
        $endDate = $this->request->getQuery('end_date');

        // Jika tidak ada input tanggal, atur nilai default
        if (empty($startDate)) {
            $startDate = '2024-01-01';  // Default start date
        }
        if (empty($endDate)) {
            $endDate = '2024-12-31';    // Default end date
        }

        // Menggunakan query builder ORM untuk memfilter berdasarkan tanggal
        $query = $this->PurchaseTransactions->find()
            ->where([
                'transaction_date >=' => $startDate,
                'transaction_date <=' => $endDate
            ])
            ->contain(['Employees', 'Purchases']);

        // Gunakan paginate dengan query builder yang sudah difilter
        $purchaseTransactions = $this->paginate($query);

        // Kirim data ke view
        $this->set(compact('purchaseTransactions', 'startDate', 'endDate'));
    }

    /**
     * View method
     *
     * @param string|null $id Purchase Transaction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchaseTransaction = $this->PurchaseTransactions->get($id, [
            'contain' => ['Employees', 'Purchases', 'PurchasePayments'],
        ]);

        $this->set(compact('purchaseTransaction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $purchaseTransaction = $this->PurchaseTransactions->newEmptyEntity();
        if ($this->request->is('post')) {
            $purchaseTransaction = $this->PurchaseTransactions->patchEntity($purchaseTransaction, $this->request->getData());
            if ($this->PurchaseTransactions->save($purchaseTransaction)) {
                $this->Flash->success(__('The purchase transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase transaction could not be saved. Please, try again.'));
        }
        $employees = $this->PurchaseTransactions->Employees->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $purchases = $this->PurchaseTransactions->Purchases->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $this->set(compact('purchaseTransaction', 'employees', 'purchases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Purchase Transaction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $purchaseTransaction = $this->PurchaseTransactions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchaseTransaction = $this->PurchaseTransactions->patchEntity($purchaseTransaction, $this->request->getData());
            if ($this->PurchaseTransactions->save($purchaseTransaction)) {
                $this->Flash->success(__('The purchase transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase transaction could not be saved. Please, try again.'));
        }
        $employees = $this->PurchaseTransactions->Employees->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $purchases = $this->PurchaseTransactions->Purchases->find('list', [
            'keyField' => 'id',
            'valueField' => 'full_description'  // Menggunakan virtual field
        ])->toArray();
        $this->set(compact('purchaseTransaction', 'employees', 'purchases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchase Transaction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchaseTransaction = $this->PurchaseTransactions->get($id);
        if ($this->PurchaseTransactions->delete($purchaseTransaction)) {
            $this->Flash->success(__('The purchase transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The purchase transaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
