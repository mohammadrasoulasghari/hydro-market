<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','forward_url','picture_url','brand_id'
    ];
}
