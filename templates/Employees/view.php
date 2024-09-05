<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Employees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Employee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="employees view content">
            <h3><?= h($employee->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($employee->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fullname') ?></th>
                    <td><?= h($employee->fullname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($employee->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($employee->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($employee->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($employee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Login') ?></th>
                    <td><?= h($employee->last_login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($employee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($employee->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($employee->address)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Purchase Transactions') ?></h4>
                <?php if (!empty($employee->purchase_transactions)) : ?>
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
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->purchase_transactions as $purchaseTransactions) : ?>
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
            <div class="related">
                <h4><?= __('Related Sale Transactions') ?></h4>
                <?php if (!empty($employee->sale_transactions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Employee Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Stock Id') ?></th>
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
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($employee->sale_transactions as $saleTransactions) : ?>
                        <tr>
                            <td><?= h($saleTransactions->id) ?></td>
                            <td><?= h($saleTransactions->employee_id) ?></td>
                            <td><?= h($saleTransactions->customer_id) ?></td>
                            <td><?= h($saleTransactions->stock_id) ?></td>
                            <td><?= h($saleTransactions->price) ?></td>
                            <td><?= h($saleTransactions->quantity) ?></td>
                            <td><?= h($saleTransactions->total_price) ?></td>
                            <td><?= h($saleTransactions->transaction_date) ?></td>
                            <td><?= h($saleTransactions->payment_method) ?></td>
                            <td><?= h($saleTransactions->status) ?></td>
                            <td><?= h($saleTransactions->payment_date) ?></td>
                            <td><?= h($saleTransactions->proof) ?></td>
                            <td><?= h($saleTransactions->created) ?></td>
                            <td><?= h($saleTransactions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SaleTransactions', 'action' => 'view', $saleTransactions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SaleTransactions', 'action' => 'edit', $saleTransactions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SaleTransactions', 'action' => 'delete', $saleTransactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saleTransactions->id)]) ?>
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
