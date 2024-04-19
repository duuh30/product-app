<?php

namespace App\Models;

use App\ValueObjects\Percentage;
use App\ValueObjects\Price;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'currency_id',
        'sku',
        'name',
        'price'
    ];

    protected function finalPrice(): Attribute
    {
        $discountPercentage = $this->discount_percentage;

        return Attribute::make(
            get: fn (mixed $value, array $attributes) => (
                $discountPercentage->percentage
                    ? (new Price(
                        price: $attributes['price'],
                        percentage: $discountPercentage->percentage)
                      )->percentage()
                    : $attributes['price']
            )
        );
    }

    protected function discountPercentage(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) => new Percentage(
                percentage: $this->discount?->percentage ?? $this->category?->discount?->percentage
            )
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function discount(): MorphOne
    {
        return $this->morphOne(Discount::class, 'discountable');
    }
}
