<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkSale extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'invoice_num', 'quantity_sold', 'price_per_kg', 'total_price','invoice'];
}
