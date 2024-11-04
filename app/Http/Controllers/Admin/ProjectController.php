<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // VISUALIZZA I PROGETTI 
     public function index()
    {
        $projects = Project::all();
        return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */

     //mostra il form per creare un nuovo projects
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //salvare  un progetto nel db
        $data = $request->validate([
            "title"=> "required|string|min:3|max:255",
            "description"=> "nullable|string",
            "image"=> "nullable|url",
        ]);
        $project = Project::create($data);
        return redirect()->route("admin.projects.index")->with("success","aggiornato! =)");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //visualizza singolo project
        return view("admin.project.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //mostra il form per eventuali modifiche
        return view("admin.projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //aggiorna un progetto che già esiste
        $data = $request->validate([
            "title"=> "required|string|min:3|max:255",
            "description"=> "nullable|string",
            "image"=> "nullable|url",
        ]);
        $project->update($data);
        return redirect()->route("admin.projects.index")->with("success","aggiornato! =)");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //elimina il progetto nel db
        $project -> delete();
        return redirect()->route("admin.projects.index")->with("success","eliminato! =(");
    }
}
