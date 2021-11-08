<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable =['titolo','immagine','autore','anno_pubblicazione','descrizione'];
}
