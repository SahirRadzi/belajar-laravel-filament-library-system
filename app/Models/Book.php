<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $guarded = [];

    public function bookcategory(): BelongsTo
    {
        return $this->belongsTo(BookCategory::class);
    }

    public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(BookShelf::class);
    }
}
