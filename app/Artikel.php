<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /* Define relationship with the Kategori
        *
        * @return void
        */
       public function kategori(){
           return $this->belongsTo(Kategori::class);
       }
}
