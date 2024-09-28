<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{
    use HasFactory;
    protected $table = "jobs_listing";

    protected $fillable = ['title','salary'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function skills(){
        return $this->belongsToMany(Skill::class);
    }
}