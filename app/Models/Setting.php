<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'website_name',
        'website_url',
        'page_title',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'country',
        'zipcode',
        'address',
        'email',
        'email2',
        'phone',
        'phone2',
        'logo',
        'footerlogo',
        'favicon',
        'facebook',
        'twitter',
        'instagram',
        'linkedin'
    ];
}
