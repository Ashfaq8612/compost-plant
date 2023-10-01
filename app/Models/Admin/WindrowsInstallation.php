<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindrowsInstallation extends Model
{
    use HasFactory;
    protected $table = 'windrows_installations';
    protected $fillable = [
        'windrow_code',
        'weight',
        'installation_date',
        'no_of_days',
        'compositions',
        'no_of_turnings',
        'status',
    ];


    public function labAnalysis()
    {
        return $this->hasMany(LabAnalysisModel::class, 'windrows_code', 'id');
    }



    public function sievingunit()
    {
        return $this->hasMany(SievingUnitModel::class, 'windrow_code', 'id');
    }

}

