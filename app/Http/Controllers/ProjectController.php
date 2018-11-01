<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET /

        $projects = Project::orderBy('start_date', 'desc')->get();

        return view('home', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /admin

        $projects = Project::orderBy('start_date', 'desc')->get();

        return view('dashboard', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /admin

        $this->validate(request(), [

            'title' => 'required|min:2',
            'url' => 'required|url',

        ]);

        $project = new Project;

        Project::create([

            'title' => request('title'),
            'description' => request('description'),
            'tools' => comma_values_to_array(request('tools')),
            'url' => request('url'),
            'start_date' => strtotime(request('start_date')),
            'major' => request('major') ? true : false,

        ]);

        return redirect('/')->with('status', 'New project added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // GET /project/{id}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET /admin/{id}

        $project = Project::findOrFail($id);

        return view('update', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // PATCH /admin/{id} (the form submit from above)

        // difference between PUT and PATCH: https://stackoverflow.com/questions/28459418/rest-api-put-vs-patch-with-real-life-examples

        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');
        $project->tools = comma_values_to_array(request('tools'));
        $project->url = request('url');
        $project->start_date = strtotime(request('start_date'));
        $project->major = request('major') ? true : false;

        $project->save();

        return redirect('/')->with('status', 'Project: '.request('title').' updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id)
    {
        // DELETE /admin/{id}

        Project::destroy($id);

        return redirect('/')->with('status', 'Project removed.');

    }
}
