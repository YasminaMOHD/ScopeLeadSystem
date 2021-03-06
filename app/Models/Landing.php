<?php

namespace App\Models;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Landing extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    protected $table = 'landing';

    public function project(){
        return $this->belongsTo(Projects::class);
    }
}
