<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BookShelf extends Model
{
    protected $fillable = [
        'name',
        'note',
    ];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

}
