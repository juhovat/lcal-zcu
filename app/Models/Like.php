<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id',
        // add other attributes that should be mass-assignable
    ];

    public function render()
    {
        // return view('liked-events');
    }
}
