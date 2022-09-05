<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed idorders
 * @property mixed name
 * @property mixed where
 * @property mixed phone
 */
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'idorders';
}
