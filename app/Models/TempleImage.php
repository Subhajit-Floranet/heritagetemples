<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempleImage extends Model
{
    use HasFactory;
    protected $table = 'temple_table_info';
    protected $primarykey = 'id';
}
