<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantOperation extends Model
{
    protected $fillable = ['date', 'operation_time_hr','waste_processing','total_msw_recieved','yesterday_left_over','consume','rejection','balance','bio','rejection_mt','scm_mt','previous_scm','scm_received','scm_total'];
}
