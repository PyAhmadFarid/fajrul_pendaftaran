<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Peserta extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama",
        "alamat",
        "nomer_hp",
        "tempat_lahir",
        "asal_sekolah",
        "tgl_lahir",
        "user_id",
        "foto",
        "gender",
        'bukti_pembayaran'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
