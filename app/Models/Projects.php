<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Projects {

private static $projects = [
    [
        'id' => 'ROOMIE',
        'project_name' => 'ROOMIE App',
        'hardSkills' => 'Javascript, Node.js, Github, Git, A/B Testing and HTML/CSS'
    ],
    [
        'id' => 'SearchEngine',
        'project_name' => 'Mock Search Engine',
        'hardSkills' => 'C/C++, Javascript, HTML/CSS, Github, Git, Object Oriented Programming, Data Structures and Algorithms'
    ]
    ];

    public static function getAllProjects(): array {
        return self::$projects;
    }

    public static function getProject(string $projectID): ?array {
        return Arr::first(self::$projects, fn($project) => $project['id'] === $projectID);
    }

}
