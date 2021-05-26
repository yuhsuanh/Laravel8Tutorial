<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    //connect your table name
    protected $table = 'product_types';
    //your primary key name
    protected $primaryKey = 'id';

    //open timestamps (created_at, updated_at, (or deleted_at - only for soft delete))
    public $timestamps =true;
}
