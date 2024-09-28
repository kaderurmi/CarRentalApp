<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'total_cost',
    ];

    // A rental belongs to a user
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // A rental belongs to a car
    public function car(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    // Calculate the total rental cost based on days and daily rent price
    public function calculateTotalCost(): float|int
    {
        $days = $this->start_date->diffInDays($this->end_date);
        return $days * $this->car->daily_rent_price;
    }
}
