<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','detail','link','linkName','detailOne','linkNameOne','linkOne','quote','quoteAuthor','detailTwo','linkNameTwo','linkTwo','detailThree','image'
    ];
}
