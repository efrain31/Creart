<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetails extends Model
{
    use HasFactory;
 //definimos los datos de llenado que seran para recibir datos masivos
 protected $fillable = [ 'price','quantity','product_id','sale_id'];
}