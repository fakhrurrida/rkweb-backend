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
    protected $table = 'user_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'nrp',
        'sub_kontraktor',
        'jabatan',
        'upload_foto_link',
        'kompetensi',
        'status',
        'masa_berlaku',
        'aktivitas_terakhir'
    ];
}
