<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductReference extends Model
{
    protected $fillable = ['reference_id', 'product_id'];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function reference(): BelongsTo
    {
        return $this->belongsTo(Reference::class);
    }
}
