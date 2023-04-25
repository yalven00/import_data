<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use HasFactory;
    
    protected $table = "stuffs";

 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    /**
     * @var int
     */
    protected $fillable = [
        'code',
        'title',
        'level1',
        'level2',
        'level3',
        'price',
        'price_sp',
        'fields_properties',
        'mutual_purchases',
        'unit_of_measure',
        'image_path',
        'description',
        'show_on_main',
        'created_at',
        'deleted_at',
    ];
}
