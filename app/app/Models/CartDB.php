<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed order_id
 * @property mixed item_id
 * @property mixed qnt
 */
class CartDB extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $primaryKey = 'id';
}
