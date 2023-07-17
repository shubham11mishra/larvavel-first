<?php

namespace App\Models;

use App\Models\postcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;

    public function postcategory(): BelongsTo
    {
        return $this->belongsTo(postcategory::class);
    }

}
