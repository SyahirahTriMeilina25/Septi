<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Str;

class Pendidikan extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'pendidikans';

    protected $fillable = [
        'alumni_id',
        'nama_pendidikan',
        'lokasi_pendidikan',
        'tanggal_mulai',
        'tanggal_selesai',
        'tingkat_pendidikan',
        'deskripsi',
        'ipk',
        'aktifitas_dan_pencapaian',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pendidikan) {
            $pendidikan->id = Str::uuid();
        });
    }

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id', 'id');
    }
}