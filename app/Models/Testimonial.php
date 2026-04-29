<?php

namespace App\Models;

use Database\Factories\TestimonialFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UseFactory(TestimonialFactory::class)]
class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'location',
        'review',
        'rating',
        'is_approved',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'rating' => 'integer',
    ];

    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }
}
