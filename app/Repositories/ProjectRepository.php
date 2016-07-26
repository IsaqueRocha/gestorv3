<?php

namespace App\Repositories;

use App\Project;

/**
 * Repository for Project
 */
class ProjectRepository
{
    public function createMarks(Project $project, $arrayTypes)
    {
        foreach ($arrayTypes as $type) {
            switch ($type) {
                case '1': //Livro Digital
                    $project->digitalMark()->create(['format_id' => '1']);
                    break;

                default:
                    break;
            }
        }
        return $project;
    }

    public function updateMarks(Project $project, $arrayTypes){

    }
}
