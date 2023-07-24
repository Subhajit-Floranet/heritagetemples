<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddTempleModel extends Model
{
    use HasFactory;
    protected $table="temple_table";
    protected $primarykey="id";
}
