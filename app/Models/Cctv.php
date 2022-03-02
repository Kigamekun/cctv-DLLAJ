<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cctv extends Model
{
    protected $table = 'cctv';
    protected $fillable = ['owner','ip_address','lokasi','status','link'];
    use HasFactory;
}
