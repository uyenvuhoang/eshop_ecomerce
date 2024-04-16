<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompareList extends Model
{
    use HasFactory;
    protected $table = 'compare_list';
    protected $primaryKey = 'compare_item_id';
    protected $fillable = [
        'compare_item_name',
        'compare_item_brand',
        'compare_item_description',
        'compare_item_price',
        'compare_item_image'
    ];
}
