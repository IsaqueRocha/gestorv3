<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;

use Laracasts\Flash\Flash;

use App\Project;
use App\Teacher;
use App\Course;
use App\Type;
use App\User;
use App\Status;

use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('template.project.gerenciar_projeto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        $prousers = $project->users()->get();
        $teachers = Teacher::all();
        $courses = Course::all();
        $types = Type::all();
        $users = User::all();
        $status = Status::all();
        return view('template.project.adicionar_projeto',
                    compact('project',
                            'prousers',
                            'teachers',
                            'courses',
                            'types',
                            'users',
                            'status'
                    )
                );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request, ProjectRepository $repo)
    {
        // dd($request);
        $input['title']         = $request->input('name');
        $input['start']         = $request->input('start');
        $input['deadline']      = $request->input('deadline');
        $input['course_id']     = $request->input('course');
        $input['teacher_id']    = $request->input('teacher');
        $input['status_id']     = $request->input('status');

        // dd($input);

        $project = Project::create($input);

        $project->users()->sync($request->input('users'));
        $project->types()->sync($request->input('types'));

        $project = $repo->createMarks($project, $request->input('types'));

        Flash::success('Projeto criado com sucesso');

        return redirect('/projects');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $prousers = $project->users()->get();
        $teachers = Teacher::all();
        $courses = Course::all();
        $types = Type::all();
        $users = User::all();
        $status = Status::all();
        return view('template.project.editar_projeto',
                    compact('project',
                            'prousers',
                            'teachers',
                            'courses',
                            'types',
                            'users',
                            'status'
                    )
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id, ProjectRepository $repo)
    {
        $project = Project::FindOrFail($id);

        $project->title         = $request->input('name');
        $project->start         = $request->input('start');
        $project->deadline      = $request->input('deadline');
        $project->course_id     = $request->input('course');
        $project->teacher_id    = $request->input('teacher');
        $project->status_id     = $request->input('status');

        $project->save();

        $project->users()->sync($request->input('users'));
        $project->types()->sync($request->input('types'));

        $project = $repo->updateMarks($project, $request->input('types'));

        Flash::success('Projeto atualizado com sucesso');

        return redirect('/projects');
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

    public function listing()
    {
        $projects = Project::with('course', 'status', 'teacher', 'users', 'types')->get();

        return response()->json(['data' => $projects]);
    }

}
