<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'nbarang', 'jbarang', 'hbarang','deskripsi','category_id','slug','gambar','user_id','status'
    ];

    public function category() {
        return $this -> belongsTo(Category::class);
    }

    public function User(){
        return $this-> belongsTo(User::class);
    }
}
