<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory20kg extends Model
{
    protected $fillable = [
        'opening_stock', 'production', 'dispatch', 'dispatch_bags', 'balance_bags',  'balance', 'date', 'opening_bags'
    ];
}
