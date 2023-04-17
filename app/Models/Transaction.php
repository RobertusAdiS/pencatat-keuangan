<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'category_id',
        'amount',
        'description',
        'created_at'
    ];

    protected $dates = ['created_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function income()
    {
        return self::where('type', 'income');
    }

    public static function expense()
    {
        return self::where('type', 'expense');
    }

    public static function filterByDate($start, $end)
    {
        return self::whereBetween('created_at', [$start, $end]);
    }
}
