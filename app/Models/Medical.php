<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'riwayat_kesehatan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tanggal',
        'diagnosa',
        'terapi',
        'izin_sakit_dalam_hari',
        'user_id'
        // 'id',
        // 'nrp',
        // 'hasil',
        // 'mcu_csv_file'
    ];
}
