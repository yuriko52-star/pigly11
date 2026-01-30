<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeightTarget extends Model
{
    protected $fillable = ['user_id','target_weight'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
