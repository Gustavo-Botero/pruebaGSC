<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmountModel extends Model
{
    use HasFactory;

    protected $table = 'amount';

    protected $fillable = [
        'product_id',
        'amount'
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class);
    }
}
