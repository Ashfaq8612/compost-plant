<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkInventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'opening_stock', 'production', 'dispatch', 'recycle', 'balance', 'date'
    ];
}
