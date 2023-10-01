<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabAnalysisModel extends Model
{
    use HasFactory;
    protected $table = 'lab_analysis';
    protected $fillable = ['windrows_code', 'analysis_date','analysis_complete_date','compositions','no_of_days','avg_temp','moisture','organic_matter','ph_value','elect_conductivity','total_dissolve_salt','cec'];

    public function windrowsInstallation()
    {
        return $this->belongsTo(WindrowsInstallation::class, 'windrows_code', 'id');
    }
}
