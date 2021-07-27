<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'kategori', 'judul', 'isi'
    ];

    public function user(){
        return $this->belongsTo(User::Class);
    }
}
