<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePurchaseTransactions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('purchase_transactions');
        $table->addColumn('employee_id', 'integer', ['null' => false]);
        $table->addColumn('purchase_id', 'integer', ['null' => false]);
        $table->addForeignKey('employee_id', 'employees', 'id', [
            'constraint' => 'fk_purchase_transactions_employees'
        ]);
        $table->addForeignKey('purchase_id', 'purchases', 'id', [
            'constraint' => 'fk_purchase_transactions_purchases'
        ]);
        $table->addColumn('price', 'integer', ['null' => false]);
        $table->addColumn('quantity', 'integer', ['null' => false]);
        $table->addColumn('total_price', 'integer', ['null' => false]);
        $table->addColumn('transaction_date', 'datetime', ['null' => false]);
        $table->addColumn('payment_method', 'string', ['limit' => 50, 'null' => false]);
        $table->addColumn('status', 'string', ['limit' => 50, 'null' => false]);
        $table->addColumn('payment_date', 'datetime');
        $table->addColumn('proof', 'string', ['limit' => 255]);
        $table->addColumn('created', 'datetime', ['null' => false]);
        $table->addColumn('modified', 'datetime', ['null' => false]);
        $table->create();
    }
}
