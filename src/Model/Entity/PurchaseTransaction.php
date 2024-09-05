<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PurchaseTransaction Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $purchase_id
 * @property int $price
 * @property int $quantity
 * @property int $total_price
 * @property \Cake\I18n\FrozenTime $transaction_date
 * @property string $payment_method
 * @property string $status
 * @property \Cake\I18n\FrozenTime $payment_date
 * @property string $proof
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Purchase $purchase
 */
class PurchaseTransaction extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'employee_id' => true,
        'purchase_id' => true,
        'price' => true,
        'quantity' => true,
        'total_price' => true,
        'transaction_date' => true,
        'payment_method' => true,
        'status' => true,
        'payment_date' => true,
        'proof' => true,
        'created' => true,
        'modified' => true,
        'employee' => true,
        'purchase' => true,
    ];
}
