<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $table ='courses';
    protected $primaryKey ='id';
    protected $fillable = ['name','subject','duration'];
    use HasFactory;

    public function duration()
    {
        return $this->duration  ."Months";
    }
}
