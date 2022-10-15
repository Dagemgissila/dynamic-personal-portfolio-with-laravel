<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homesetting extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'homephoto',
         'mapaddress',
        'logo'
  ];
}
