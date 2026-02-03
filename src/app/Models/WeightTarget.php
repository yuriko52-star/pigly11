<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeightTarget extends Model
{
    protected $table = 'weight_target';
    // テーブル名を明示指定
    protected $fillable = ['user_id','target_weight'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
