<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalePayment $salePayment
 * @var string[]|\Cake\Collection\CollectionInterface $saleTransactions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salePayment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salePayment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sale Payments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="salePayments form content">
            <?= $this->Form->create($salePayment) ?>
            <fieldset>
                <legend><?= __('Edit Sale Payment') ?></legend>
                <?php
                echo $this->Form->control('sale_transaction_id', [
                    'options' => $saleTransactions, // Data dari controller
                    'empty' => 'Pilih Sale Transaction',
                    'label' => 'Sale Transaction',
                    'valueField' => 'id',  // Menggunakan 'id' sebagai value
                    'textField' => 'full_description'  // Menampilkan full description
                ]);
                echo $this->Form->control('nominal');
                echo $this->Form->control('payment_method', ['options' => ['Cash' => 'Cash', 'Credit Card' => 'Credit Card', 'Transfer Bank' => 'Transfer Bank', 'Installment-Cash' => 'Installment-Cash', 'Installment-Transfer Bank' => 'Installment-Transfer Bank ', 'Other' => 'Other']]);
                echo $this->Form->control('status', ['options' => ['Waiting' => 'Waiting', 'Checking' => 'Checking', 'Invalid' => 'Invalid', 'Completed' => 'Completed', 'Cancelled' => 'Cancelled']]);
                echo $this->Form->control('payment_date');
                echo $this->Form->control('proof');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>