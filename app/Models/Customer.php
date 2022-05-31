<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','phone','email'
    ];
    
    
    public function feedbacks(){
        return $this->hasMany(Feedback::class)->orderBy('id','DESC');
    }
    
    
}
