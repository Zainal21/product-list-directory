<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'category';
    protected $guarded  = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'category_id', 'id');
    }

}
