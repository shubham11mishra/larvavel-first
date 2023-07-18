<?php

namespace App\Models;

use DateTimeInterface;
use App\Models\postcategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

    public function postcategory(): BelongsTo
    {
        return $this->belongsTo(postcategory::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    // protected function createdAt(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn (Carbon $value) => $value->diffForHumans(),
    //     );
    // }
} 
