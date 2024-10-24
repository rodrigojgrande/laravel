<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all():array{
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 'R$50.000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => 'R$10.000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 'R$40.000'
            ],
        ];
    }
    public static function find(int $id):array {
        $job =  Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job){
            abort(404);
        }
    }

}

