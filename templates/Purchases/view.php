<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Purchase $purchase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Purchase'), ['action' => 'edit', $purchase->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Purchase'), ['action' => 'delete', $purchase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Purchases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Purchase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="purchases view content">
            <h3><?= h($purchase->merk) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supplier') ?></th>
                    <td><?= $purchase->has('supplier') ? $this->Html->link($purchase->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $purchase->supplier->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Merk') ?></th>
                    <td><?= h($purchase->merk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($purchase->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Engine Capacity') ?></th>
                    <td><?= h($purchase->engine_capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($purchase->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Production Year') ?></th>
                    <td><?= h($purchase->production_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($purchase->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($purchase->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($purchase->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($purchase->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td>
                        <?= $purchase->has('created_by_employee') ?
                            $this->Html->link($purchase->created_by_employee->fullname, ['controller' => 'Employees', 'action' => 'view', $purchase->created_by]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td>
                        <?= $purchase->has('modified_by_employee') ?
                            $this->Html->link($purchase->modified_by_employee->fullname, ['controller' => 'Employees', 'action' => 'view', $purchase->modified_by]) : '' ?>
                    </td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Purchase Transactions') ?></h4>
                <?php if (!empty($purchase->purchase_transactions)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Employee Id') ?></th>
                                <th><?= __('Purchase Id') ?></th>
                                <th><?= __('Price') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Total Price') ?></th>
                                <th><?= __('Transaction Date') ?></th>
                                <th><?= __('Payment Method') ?></th>
                                <th><?= __('Status') ?></th>
                                <th><?= __('Payment Date') ?></th>
                                <th><?= __('Proof') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($purchase->purchase_transactions as $purchaseTransactions) : ?>
                                <tr>
                                    <td><?= h($purchaseTransactions->id) ?></td>
                                    <td><?= h($purchaseTransactions->employee_id) ?></td>
                                    <td><?= h($purchaseTransactions->purchase_id) ?></td>
                                    <td><?= h($purchaseTransactions->price) ?></td>
                                    <td><?= h($purchaseTransactions->quantity) ?></td>
                                    <td><?= h($purchaseTransactions->total_price) ?></td>
                                    <td><?= h($purchaseTransactions->transaction_date) ?></td>
                                    <td><?= h($purchaseTransactions->payment_method) ?></td>
                                    <td><?= h($purchaseTransactions->status) ?></td>
                                    <td><?= h($purchaseTransactions->payment_date) ?></td>
                                    <td><?= h($purchaseTransactions->proof) ?></td>
                                    <td><?= h($purchaseTransactions->created) ?></td>
                                    <td><?= h($purchaseTransactions->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'PurchaseTransactions', 'action' => 'view', $purchaseTransactions->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'PurchaseTransactions', 'action' => 'edit', $purchaseTransactions->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'PurchaseTransactions', 'action' => 'delete', $purchaseTransactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseTransactions->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>