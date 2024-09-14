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
                <h4><?= __('Related Customers') ?></h4>
                <?php if (!empty($employee->customers)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('NIK') ?></th>
                                <th><?= __('Phone') ?></th>
                                <th><?= __('Email') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->customers as $customers) : ?>
                                <tr>
                                    <td><?= h($customers->id) ?></td>
                                    <td><?= h($customers->name) ?></td>
                                    <td><?= h($customers->nik) ?></td>
                                    <td><?= h($customers->phone) ?></td>
                                    <td><?= h($customers->email) ?></td>
                                    <td><?= h($customers->created) ?></td>
                                    <td><?= h($customers->modified) ?></td>
                                    <td><?= h($customers->created_by) ?></td>
                                    <td><?= h($customers->modified_by) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Suppliers') ?></h4>
                <?php if (!empty($employee->suppliers)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Phone') ?></th>
                                <th><?= __('Email') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->suppliers as $suppliers) : ?>
                                <tr>
                                    <td><?= h($suppliers->id) ?></td>
                                    <td><?= h($suppliers->name) ?></td>
                                    <td><?= h($suppliers->phone) ?></td>
                                    <td><?= h($suppliers->email) ?></td>
                                    <td><?= h($suppliers->created) ?></td>
                                    <td><?= h($suppliers->modified) ?></td>
                                    <td><?= h($suppliers->created_by) ?></td>
                                    <td><?= h($suppliers->modified_by) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Suppliers', 'action' => 'view', $suppliers->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Suppliers', 'action' => 'edit', $suppliers->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Suppliers', 'action' => 'delete', $suppliers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suppliers->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Stocks') ?></h4>
                <?php if (!empty($employee->stocks)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Merk') ?></th>
                                <th><?= __('Model') ?></th>
                                <th><?= __('Engine Capacity') ?></th>
                                <th><?= __('Color') ?></th>
                                <th><?= __('Production Year') ?></th>
                                <th><?= __('Price') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->stocks as $stocks) : ?>
                                <tr>
                                    <td><?= h($stocks->id) ?></td>
                                    <td><?= h($stocks->merk) ?></td>
                                    <td><?= h($stocks->model) ?></td>
                                    <td><?= h($stocks->engine_capacity) ?></td>
                                    <td><?= h($stocks->color) ?></td>
                                    <td><?= h($stocks->production_year) ?></td>
                                    <td><?= h($stocks->price) ?></td>
                                    <td><?= h($stocks->quantity) ?></td>
                                    <td><?= h($stocks->created) ?></td>
                                    <td><?= h($stocks->modified) ?></td>
                                    <td><?= h($stocks->created_by) ?></td>
                                    <td><?= h($stocks->modified_by) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Stocks', 'action' => 'view', $stocks->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Stocks', 'action' => 'edit', $stocks->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stocks', 'action' => 'delete', $stocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stocks->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Purchase Transactions') ?></h4>
                <?php if (!empty($employee->purchase_transactions)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Code') ?></th>
                                <th><?= __('Purchase Id') ?></th>
                                <th><?= __('Price') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Total Price') ?></th>
                                <th><?= __('Transaction Date') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->purchase_transactions as $purchaseTransactions) : ?>
                                <tr>
                                    <td><?= h($purchaseTransactions->id) ?></td>
                                    <td><?= h($purchaseTransactions->code) ?></td>
                                    <td><?= h($purchaseTransactions->purchase_id) ?></td>
                                    <td><?= h($purchaseTransactions->price) ?></td>
                                    <td><?= h($purchaseTransactions->quantity) ?></td>
                                    <td><?= h($purchaseTransactions->total_price) ?></td>
                                    <td><?= h($purchaseTransactions->transaction_date) ?></td>
                                    <td><?= h($purchaseTransactions->created) ?></td>
                                    <td><?= h($purchaseTransactions->modified) ?></td>
                                    <td><?= h($purchaseTransactions->created_by) ?></td>
                                    <td><?= h($purchaseTransactions->modified_by) ?></td>
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
                                <th><?= __('Code') ?></th>
                                <th><?= __('Customer Id') ?></th>
                                <th><?= __('Stock Id') ?></th>
                                <th><?= __('Price') ?></th>
                                <th><?= __('Quantity') ?></th>
                                <th><?= __('Total Price') ?></th>
                                <th><?= __('Transaction Date') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->sale_transactions as $saleTransactions) : ?>
                                <tr>
                                    <td><?= h($saleTransactions->id) ?></td>
                                    <td><?= h($saleTransactions->code) ?></td>
                                    <td><?= h($saleTransactions->customer_id) ?></td>
                                    <td><?= h($saleTransactions->stock_id) ?></td>
                                    <td><?= h($saleTransactions->price) ?></td>
                                    <td><?= h($saleTransactions->quantity) ?></td>
                                    <td><?= h($saleTransactions->total_price) ?></td>
                                    <td><?= h($saleTransactions->transaction_date) ?></td>
                                    <td><?= h($saleTransactions->created) ?></td>
                                    <td><?= h($saleTransactions->modified) ?></td>
                                    <td><?= h($saleTransactions->created_by) ?></td>
                                    <td><?= h($saleTransactions->modified_by) ?></td>
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
            <div class="related">
                <h4><?= __('Related Purchase Payments') ?></h4>
                <?php if (!empty($employee->purchase_payments)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Purchase Transaction') ?></th>
                                <th><?= __('Payment Method') ?></th>
                                <th><?= __('Status') ?></th>
                                <th><?= __('Proof') ?></th>
                                <th><?= __('Nominal') ?></th>
                                <th><?= __('Payment Date') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->purchase_payments as $purchase_payments) : ?>
                                <tr>
                                    <td><?= h($purchase_payments->id) ?></td>
                                    <td><?= h($purchase_payments->purchase_transaction_id) ?></td>
                                    <td><?= h($purchase_payments->payment_method) ?></td>
                                    <td><?= h($purchase_payments->status) ?></td>
                                    <td><?= h($purchase_payments->proof) ?></td>
                                    <td><?= h($purchase_payments->nominal) ?></td>
                                    <td><?= h($purchase_payments->payment_date) ?></td>
                                    <td><?= h($purchase_payments->created) ?></td>
                                    <td><?= h($purchase_payments->modified) ?></td>
                                    <td><?= h($purchase_payments->created_by) ?></td>
                                    <td><?= h($purchase_payments->modified_by) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'PurchasePayments', 'action' => 'view', $purchase_payments->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'PurchasePayments', 'action' => 'edit', $purchase_payments->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'PurchasePayments', 'action' => 'delete', $purchase_payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchase_payments->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sale Payments') ?></h4>
                <?php if (!empty($employee->sale_payments)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('sale Transaction') ?></th>
                                <th><?= __('Payment Method') ?></th>
                                <th><?= __('Status') ?></th>
                                <th><?= __('Proof') ?></th>
                                <th><?= __('Nominal') ?></th>
                                <th><?= __('Payment Date') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th><?= __('Created_By') ?></th>
                                <th><?= __('Modified_By') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($employee->sale_payments as $sale_payments) : ?>
                                <tr>
                                    <td><?= h($sale_payments->id) ?></td>
                                    <td><?= h($sale_payments->sale_transaction_id) ?></td>
                                    <td><?= h($sale_payments->payment_method) ?></td>
                                    <td><?= h($sale_payments->status) ?></td>
                                    <td><?= h($sale_payments->proof) ?></td>
                                    <td><?= h($sale_payments->nominal) ?></td>
                                    <td><?= h($sale_payments->payment_date) ?></td>
                                    <td><?= h($sale_payments->created) ?></td>
                                    <td><?= h($sale_payments->modified) ?></td>
                                    <td><?= h($sale_payments->created_by) ?></td>
                                    <td><?= h($sale_payments->modified_by) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'SalePayments', 'action' => 'view', $sale_payments->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'SalePayments', 'action' => 'edit', $sale_payments->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalePayments', 'action' => 'delete', $sale_payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale_payments->id)]) ?>
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