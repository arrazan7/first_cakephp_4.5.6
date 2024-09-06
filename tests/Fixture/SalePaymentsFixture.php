<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalePaymentsFixture
 */
class SalePaymentsFixture extends TestFixture
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
                'sale_transaction_id' => 1,
                'nominal' => 1,
                'payment_method' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'payment_date' => '2024-09-05 18:39:39',
                'proof' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-09-05 18:39:39',
                'modified' => '2024-09-05 18:39:39',
            ],
        ];
        parent::init();
    }
}
