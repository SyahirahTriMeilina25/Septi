<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Pengalaman extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'pengalamans';

    protected $fillable = [
        'alumni_id',
        'nama_perusahaan',
        'jabatan',
        'lokasi_perusahaan',
        'deskripsi_perusahaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'portfolio_prestasi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pengalaman) {
            $pengalaman->id = Str::uuid();
        });
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id', 'id');
    }
}