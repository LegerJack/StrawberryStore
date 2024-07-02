<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class);
    }
}
