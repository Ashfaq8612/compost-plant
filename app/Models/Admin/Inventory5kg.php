<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory5kg extends Model
{
    use HasFactory;
    protected $fillable = [
        'opening_stock', 'production', 'dispatch', 'dispatch_bags', 'balance_bags',  'balance', 'date', 'opening_bags'
    ];
}
