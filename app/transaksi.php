<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'id_pemilik','id_peminjam','jbarang','status'
    ];

    public function User(){
        return $this-> belongsTo(User::class);
    }
}
