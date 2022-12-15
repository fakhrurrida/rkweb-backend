<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdPermit extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rk_permit';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nrp',
        'sub_kontraktor',
        'jabatan',
        'pas_foto',
        'kompetensi',
        'status',
        'masa_berlaku',
        'aktivitas_terakhir'
    ];
}
