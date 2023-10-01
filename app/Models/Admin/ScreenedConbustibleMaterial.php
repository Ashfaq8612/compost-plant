<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreenedConbustibleMaterial extends Model
{
    protected $fillable = ['date','total_scm_received','bail_created', 'operation_hrs'];
}
