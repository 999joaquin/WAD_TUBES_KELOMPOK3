<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasidokter extends Model
{
    // identifikasi tabel pada database
    public $table = "informasidokter";
    protected $primaryKey = 'idDokter';

    protected $fillable = [
        'idDokter',
        'foto',
        'nama',
        'spesialis',
        'riwayatpendidikan',
        'penghargaan'
    ];


    Use HasFactory;

}
