<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    //protected $fillable=['title','article'];

    public function User()
    {
        return $this->belongTo(User::class);
    }
}
