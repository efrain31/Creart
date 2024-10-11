<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
 //definimos los datos de llenado que seran para recibir datos masivos
 protected $fillable = [ 'total','items','cash','change','status','user_id'];
}

