<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Doctors',
                'salary' => '$10000'
            ],
            [
                'id' => 2,
                'title' => 'Engineer',
                'salary' => '$20000'
            ],
            [
                'id' => 3,
                'title' => 'Actor',
                'salary' => '$30000'
            ],
        ];
    }

    public static function find($id): array
    {

        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        } else {
            return $job;
        }
    }
}
