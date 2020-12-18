<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adresses extends Model
{
    protected $fillable = [
      'comp_id',
      'adress',
      'long',
      'lat'
    ];
}
