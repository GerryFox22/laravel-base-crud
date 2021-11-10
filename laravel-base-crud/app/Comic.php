<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes;
    protected $fillable =['titolo','immagine','autore','anno_pubblicazione','descrizione'];
}
