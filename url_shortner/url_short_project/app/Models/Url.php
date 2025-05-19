<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Url extends Model
{
    /** @use HasFactory<\Database\Factories\UrlFactory> */
    use HasFactory;
    //1 url belongs to 1 user
    protected $guarded=[];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    
}
