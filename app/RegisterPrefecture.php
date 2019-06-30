<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterPrefecture extends Model
{
    protected $fillable = ['user_id', 'prefecture_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
