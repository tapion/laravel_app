<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; //This is bc is a test, don't do on prod

    public function user(){
        return $this->belongsTo(User::class);
    }
}
