<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Pagination\Paginator;

class student extends Model
{
    use HasFactory,SoftDeletes,Notifiable;

    protected $table = "student";
    protected $fillable = ['id','name', 'email','image'];


}
