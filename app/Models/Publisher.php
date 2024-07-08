<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'tbl_publisher';
    protected $primaryKey = 'publisher_id';
    protected $fillable = [
        'publisher_name','publisher_address','publisher_phone','publisher_desc','publisher_status',
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
