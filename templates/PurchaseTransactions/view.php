<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PurchaseTransaction $purchaseTransaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Purchase Transaction'), ['action' => 'edit', $purchaseTransaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Purchase Transaction'), ['action' => 'delete', $purchaseTransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseTransaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Purchase Transactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Purchase Transaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="purchaseTransactions view content">
            <h3><?= h($purchaseTransaction->payment_method) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $purchaseTransaction->has('employee') ? $this->Html->link($purchaseTransaction->employee->username, ['controller' => 'Employees', 'action' => 'view', $purchaseTransaction->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Purchase') ?></th>
                    <td><?= $purchaseTransaction->has('purchase') ? $this->Html->link($purchaseTransaction->purchase->merk, ['controller' => 'Purchases', 'action' => 'view', $purchaseTransaction->purchase->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Method') ?></th>
                    <td><?= h($purchaseTransaction->payment_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($purchaseTransaction->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proof') ?></th>
                    <td><?= h($purchaseTransaction->proof) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($purchaseTransaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($purchaseTransaction->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($purchaseTransaction->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Price') ?></th>
                    <td><?= $this->Number->format($purchaseTransaction->total_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transaction Date') ?></th>
                    <td><?= h($purchaseTransaction->transaction_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Date') ?></th>
                    <td><?= h($purchaseTransaction->payment_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($purchaseTransaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($purchaseTransaction->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
