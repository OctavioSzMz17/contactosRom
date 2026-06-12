<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;

    protected $fillable = [
        'url',
        'alt',
        'imageable_id',
        'imageable_type',
    ];

    /**
     * Relación polimórfica inversa.
     * Permite saber a qué modelo pertenece esta imagen (User, Contact, etc.)
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
