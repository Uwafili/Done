<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        '',
        'email',
        'password',
    ];
public function user()
{
    return $this->belongsTo(User::class);
}

}