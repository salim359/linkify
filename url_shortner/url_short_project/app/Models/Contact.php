<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;
    protected $guarded=[];
    // 1 contact belongs to  1 user
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    
}
