<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'user_id', 'total_harga', 'status', 'bukti_pembayaran', 'tanggal_pesan', 'tanggal_bayar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detail()
    {
        return $this->hasMany(PesananDetail::class);
    }

    public function pengiriman()
    {
        return $this->hasOne(Pengiriman::class);
    }
}
