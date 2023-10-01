<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SievingUnitModel extends Model
{
    use HasFactory;

    protected $fillable = ['windrows_code', 'production', 'rejection', 'operation_time'];



    public function windrowsInstallation()
    {
        return $this->belongsTo(WindrowsInstallation::class, 'windrows_code', 'id');
    }
}
