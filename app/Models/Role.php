<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public static $ADMINID = '1';
    public static $MODID = '2';
    public static $USERID = '3';
}
