<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //definimos los datos de llenado que seran para recibir datos masivos
    protected $fillable = [ 'name','barcode','cost','price','stock','alerts','image','category_id'];
}
