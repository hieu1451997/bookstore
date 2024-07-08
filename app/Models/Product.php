<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_product';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'category_id','publisher_id','product_name','product_content','product_desc','product_price','product_quantity','product_sold','product_image','product_status'
    ];
    public function publishers(){
        return $this->belongsTo(Publisher::class,'publisher_id');
    }
    public function categorys(){
        return $this->belongsTo(CategoryProduct::class,'category_id');
    }
    use HasFactory;
}
