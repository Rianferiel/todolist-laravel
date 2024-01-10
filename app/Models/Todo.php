<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'todo',
        'is_done',
    ];
    protected $table = 'todos';
    public $timestamps = false;
}
