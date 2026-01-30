<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class weightLog extends Model
{
   protected $fillable = [
    'user_id',
    'date',
    'weight',
    'calories',
    'exersize_time',
    'exersize_content',
   ];

   public function user() {
    return $this->belongsTo(User::class);
   }
}
