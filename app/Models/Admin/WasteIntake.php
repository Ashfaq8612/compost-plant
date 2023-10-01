<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteIntake extends Model
{
    protected $table= 'waste_intakes';
    protected $fillable = ['msw','cow_dung','egg_shell','green_waste', 'date','total'];

}
