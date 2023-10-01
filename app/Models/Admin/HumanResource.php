<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumanResource extends Model
{
    protected $table = 'human_resources';
    protected $fillable = ['date','present_employees','absent_employees'];
}
