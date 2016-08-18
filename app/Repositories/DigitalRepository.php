<?php

namespace App\Repositories;

use App\Project;

/**
 * DigitalMark methods repository.
 */
class DigitalRepository
{
    public function digitalUpdate(Project $project, $input)
    {
        $project->digitalMark->metting = $input['metting'];
        $project->digitalMark->briefing = $input['briefing'];
        $project->digitalMark->format->id = $input['format'];
        $project->digitalMark->chapters_done = $input['chapters_done'];
        $project->digitalMark->isbn = $input['isbn'];
        /*
        * CHECKBOX'S
        */
        if (isset($input['cover'])) {
            $project->digitalMark->cover = $input['cover'];
        } else {
            $project->digitalMark->cover = 0;
        }
        if (isset($input['authorcv'])) {
            $project->digitalMark->authorcv = $input['authorcv'];
        } else {
            $project->digitalMark->authorcv = 0;
        }
        if (isset($input['coord_revision'])) {
            $project->digitalMark->coord_revision = $input['coord_revision'];
        } else {
            $project->digitalMark->coord_revision = 0;
        }
        if (isset($input['organization'])) {
            $project->digitalMark->organization = $input['organization'];
        } else {
            $project->digitalMark->organization = 0;
        }
        if (isset($input['upload'])) {
            $project->digitalMark->upload = $input['upload'];
        } else {
            $project->digitalMark->upload = 0;
        }
        if (isset($input['transfer'])) {
            $project->digitalMark->transfer = $input['transfer'];
        } else {
            $project->digitalMark->transfer = 0;
        }

        // $project->digitalMark->opening_chapters = $input['opening_chapters'];
        // $project->digitalMark->opening_chapters_done = $input['opening_chapters_done'];
        // $project->digitalMark->opening_chapters_exists = $input['opening_chapters_exists'];
        // $project->digitalMark->animation2d = $input['animation2d'];
        // $project->digitalMark->animation2d_done = $input['animation2d_done'];
        // $project->digitalMark->animation2d_exists = $input['animation2d_exists'];
        // $project->digitalMark->animation3d = $input['animation3d'];
        // $project->digitalMark->animation3d_done = $input['animation3d_done'];
        // $project->digitalMark->animation3d_exists = $input['animation3d_exists'];
        // $project->digitalMark->formulas = $input['formulas'];
        // $project->digitalMark->formulas_done = $input['formulas_done'];
        // $project->digitalMark->formulas_exists = $input['formulas_exists'];
        // $project->digitalMark->photografs = $input['photografs'];
        // $project->digitalMark->photografs_done = $input['photografs_done'];
        // $project->digitalMark->photografs_exists = $input['photografs_exists'];
        // $project->digitalMark->ilustrations = $input['ilustrations'];
        // $project->digitalMark->ilustrations_done = $input['ilustrations_done'];
        // $project->digitalMark->ilustrations_exists = $input['ilustrations_exists'];
        // $project->digitalMark->modeling3d = $input['modeling3d'];
        // $project->digitalMark->modeling3d_done = $input['modeling3d_done'];
        // $project->digitalMark->modeling3d_exists = $input['modeling3d_exists'];
        // $project->digitalMark->development = $input['development'];
        // $project->digitalMark->development_exists = $input['development_exists'];
        // $project->digitalMark->tables = $input['tables'];
        // $project->digitalMark->tables_done = $input['tables_done'];
        // $project->digitalMark->tables_exists = $input['tables_exists'];

        return $project;
    }
}
