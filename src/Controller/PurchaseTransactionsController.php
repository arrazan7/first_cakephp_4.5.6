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
            'contain' => ['Employees', 'Purchases'],
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
        $employees = $this->PurchaseTransactions->Employees->find('list', ['limit' => 200])->all();
        $purchases = $this->PurchaseTransactions->Purchases->find('list', ['limit' => 200])->all();
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
        $employees = $this->PurchaseTransactions->Employees->find('list', ['limit' => 200])->all();
        $purchases = $this->PurchaseTransactions->Purchases->find('list', ['limit' => 200])->all();
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
