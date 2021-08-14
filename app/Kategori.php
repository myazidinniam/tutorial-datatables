<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    /* Define relationship with the Artikel
        *
        * @return void
        */
        public function artikel()
        {
            return $this->hasMany(Artikel::class);
        }
}
