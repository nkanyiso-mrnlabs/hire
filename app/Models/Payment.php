<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function quote(){
        return $this->belongsTo(Quote::class);
    }
    public function eployee_payment(){
        return $this->hasOne(EmployeePayment::class);
    }
}
