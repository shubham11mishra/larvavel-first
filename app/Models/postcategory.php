<?php

namespace App\Models;

use App\Models\post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class postcategory extends Model
{
    use HasFactory;



    public function post(): HasMany
    {
        return $this->hasMany(post::class);
    }
}
