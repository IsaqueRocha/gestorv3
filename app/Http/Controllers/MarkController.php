<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Format;
use App\Repositories\DigitalRepository;

class MarkController extends Controller
{
    /**
     * The digital repository instance.
     *
     * @var DigitalRepository
     */
    protected $digitalRepo;

    /**
     * Create a new controller instance.
     *
     * @param DigitalRepository $digitalRepo
     */
    public function __construct(DigitalRepository $digitalRepo)
    {
        $this->middleware('auth');

        $this->digitalRepo = $digitalRepo;
    }

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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digitalformats = Format::where('type', '=', 'digital')->get();
        $impressformats = Format::where('type', '=', 'impress')->get();
        $project = Project::findOrFail($id);

        return view('template.project.gerenciar_marcos', compact('project', 'digitalformats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $value)
    {
        $project = Project::findOrFail($id);
        $input = $request->all();
        if ($value == 'digital') {
            $project = $this->digitalRepo->digitalUpdate($project, $input);
        }
        $project->digitalMark->save();
        $project->save();

        return response()->json($project->digitalMark);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
