<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassAssignmentException;


class students extends Model
{
    use HasFactory;
    protected $table ='students';
    protected $primaryKey ='id';
    protected $fillable = ['name','address','mobile'];
}
