<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Akun extends Authenticatable
{
    use HasFactory;
    protected $table = "Akun";
    protected $fillabel = ['username','password','role'];
    public $timestamps = false;
    protected $primaryKey = "id_akun";
}
