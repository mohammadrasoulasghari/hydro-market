<?php

namespace App\Models;

use App\Models\detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=[
     'name','picture_url'
    ];
    public function getUrlPictureAttributr()
    {
        return Storage::url($this->url);
    }

    public function details()
    {
        return $this->hasMany(detail::class);
    }
}
