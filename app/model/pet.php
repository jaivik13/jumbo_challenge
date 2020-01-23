<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    //    
    protected $fillable = [
        'id', 'category_id', 'category_name', 'pets_name', 'photoUrls', 'tag_id', 'tag_name', 'Status','additionalMetadata','file'
    ];
}
