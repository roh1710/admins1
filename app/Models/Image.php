<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Image extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'name',
      ];

      
      public function now()
    {
        return $this->hasMany(User::class);
      
    }
}
