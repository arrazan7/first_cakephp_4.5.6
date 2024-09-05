<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks view content">
            <h3><?= h($stock->merk) ?></h3>
            <table>
                <tr>
                    <th><?= __('Merk') ?></th>
                    <td><?= h($stock->merk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($stock->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Engine Capacity') ?></th>
                    <td><?= h($stock->engine_capacity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($stock->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Production Year') ?></th>
                    <td><?= h($stock->production_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stock->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($stock->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($stock->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($stock->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($stock->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sale Transactions') ?></h4>
                <?php if (!empty($stock->sale_transactions)) : ?>
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
                        <?php foreach ($stock->sale_transactions as $saleTransactions) : ?>
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
