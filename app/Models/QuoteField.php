<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteField extends Model
{
    use HasFactory;

    
    public function qoute(){

        return $this->belongsTo(Quote::class);
     }
}
