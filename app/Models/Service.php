<?php

namespace App\Models;

use Database\Factories\ServiceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /** @use HasFactory<ServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'description',
        'price',
        'is_active',
        'order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'order' => 'integer',
    ];

    // Scope hanya yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
