<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElisStats extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'elis_stats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'nama',
        'nrp',
        'jabatan',
        'jumlah_masuk',
        'jumlah_offsite_offduty',
        'abcg_plan',
        'abcg_act',
        'inspeksi_plan',
        'inspeksi_act',
        'sidak_plan',
        'sidak_act',
        'observasi_plan',
        'observasi_act',
        'pd_plan',
        'pd_act',
        'pc_plan',
        'pc_act'
    ];
}
