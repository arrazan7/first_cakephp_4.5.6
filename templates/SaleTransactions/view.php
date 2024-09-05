<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SaleTransaction $saleTransaction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sale Transaction'), ['action' => 'edit', $saleTransaction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sale Transaction'), ['action' => 'delete', $saleTransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTransaction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sale Transactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sale Transaction'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saleTransactions view content">
            <h3><?= h($saleTransaction->payment_method) ?></h3>
            <table>
                <tr>
                    <th><?= __('Employee') ?></th>
                    <td><?= $saleTransaction->has('employee') ? $this->Html->link($saleTransaction->employee->username, ['controller' => 'Employees', 'action' => 'view', $saleTransaction->employee->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $saleTransaction->has('customer') ? $this->Html->link($saleTransaction->customer->name, ['controller' => 'Customers', 'action' => 'view', $saleTransaction->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Stock') ?></th>
                    <td><?= $saleTransaction->has('stock') ? $this->Html->link($saleTransaction->stock->merk, ['controller' => 'Stocks', 'action' => 'view', $saleTransaction->stock->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Method') ?></th>
                    <td><?= h($saleTransaction->payment_method) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($saleTransaction->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proof') ?></th>
                    <td><?= h($saleTransaction->proof) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($saleTransaction->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($saleTransaction->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($saleTransaction->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Price') ?></th>
                    <td><?= $this->Number->format($saleTransaction->total_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transaction Date') ?></th>
                    <td><?= h($saleTransaction->transaction_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Date') ?></th>
                    <td><?= h($saleTransaction->payment_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($saleTransaction->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($saleTransaction->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
