<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gelombang extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nama_gelombang'];
    protected $dates = ['deleted_at'];
}
