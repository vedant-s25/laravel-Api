<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class React_task extends Model
{
    use HasFactory;
    protected $table = 'react_task';
    protected $primaryKey = 'id';
    protected $filed=[ 'name'];
}

