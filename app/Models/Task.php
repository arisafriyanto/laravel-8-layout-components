<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // if table no plural/more
    // protected $table = 'another_table';

    // protected $guarded = [];
    protected $fillable = ["list"];
}
