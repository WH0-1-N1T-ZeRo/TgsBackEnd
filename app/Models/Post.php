<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use MongoDB\Driver\Manager;

class Post extends Model
{
    use HasFactory;
    protected $collection = 'posts'; // specify the MongoDB collection name
    protected $fillable = ['Nama'];
}
