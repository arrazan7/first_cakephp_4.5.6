<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SaleTransactionsFixture
 */
class SaleTransactionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'employee_id' => 1,
                'customer_id' => 1,
                'stock_id' => 1,
                'price' => 1,
                'quantity' => 1,
                'total_price' => 1,
                'transaction_date' => '2024-09-05 11:22:43',
                'payment_method' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'payment_date' => '2024-09-05 11:22:43',
                'proof' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-09-05 11:22:43',
                'modified' => '2024-09-05 11:22:43',
            ],
        ];
        parent::init();
    }
}
