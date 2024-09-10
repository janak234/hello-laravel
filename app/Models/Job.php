<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    // static function returns all jobs
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => '$20,000'
            ],
            [
                'id' => 3,
                'title' => 'Manager',
                'salary' => '$100,000'
            ]
            ];
    }

    // static function returns job by id
    public static function find($id){
        return Arr::first(Job::all(), fn ($job) => $job['id'] == $id);
    }
}