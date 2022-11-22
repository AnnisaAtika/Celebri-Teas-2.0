<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    use HasFactory;

    protected $fillable = ['star','title1', 'body1', 'attachment1', 'attachment2',
                          'title2', 'body2', 'attachment3', 'attachment4', 
                          'title3', 'body3','attachment5', 
                          'title4', 'body4', 'user_id' ];

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
}
