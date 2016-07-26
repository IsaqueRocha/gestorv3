<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use App\Format;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digitalformats = Format::where('type', '=' ,'digital')->get();
        $impressformats = Format::where('type', '=' ,'impress')->get();
        $project = Project::findOrFail($id);
        return view('template.project.gerenciar_marcos', compact('project', 'digitalformats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $value)
    {

        $project = Project::findOrFail($id);
        if ($value == 'digital') {
            $project->digitalMark->metting = $request->input('metting');
            $project->digitalMark->briefing = $request->input('briefing');
            $project->digitalMark->format->id = $request->input('format');
            $project->digitalMark->cover = $request->input('cover');
            $project->digitalMark->chapters_done = $request->input('chapters_done');
            $project->digitalMark->authorcv = $request->input('authorcv');
            $project->digitalMark->isbn = $request->input('isbn');
            $project->digitalMark->coord_revision = $request->input('coord_revision');
            $project->digitalMark->organization = $request->input('organization');
            $project->digitalMark->upload = $request->input('upload');
            $project->digitalMark->transfer = $request->input('transfer');

            $project->digitalMark->save();

            //Complements

            $complements = [
                'opening_chapters' => $request->input('opening_chapters'),
                'opening_chapters_done' => $request->input('opening_chapters_done'),
                'opening_chapters_exists' => $request->input('opening_chapters_exists'),
                'animation2d' => $request->input('animation2d'),
                'animation2d_done' => $request->input('animation2d_done'),
                'animation2d_exists' => $request->input('animation2d_exists'),
                'animation3d' => $request->input('animation3d'),
                'animation3d_done' => $request->input('animation3d_done'),
                'animation3d_exists' => $request->input('animation3d_exists'),
                'formulas' => $request->input('formulas'),
                'formulas_done' => $request->input('formulas_done'),
                'formulas_exists' => $request->input('formulas_exists'),
                'photografs' => $request->input('photografs'),
                'photografs_done' => $request->input('photografs_done'),
                'photografs_exists' => $request->input('photografs_exists'),
                'ilustrations' => $request->input('ilustrations'),
                'ilustrations_done' => $request->input('ilustrations_done'),
                'ilustrations_exists' => $request->input('ilustrations_exists'),
                'modeling3d' => $request->input('modeling3d'),
                'modeling3d_done' => $request->input('modeling3d_done'),
                'modeling3d_exists' => $request->input('modeling3d_exists'),
                'development' => $request->input('development'),
                'development_exists' => $request->input('development_exists'),
                'tables' => $request->input('tables'),
                'tables_done' => $request->input('tables_done'),
                'tables_exists' => $request->input('tables_exists'),
            ];

        }

        $project->save();

        return response()->json($project->digitalMark);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
