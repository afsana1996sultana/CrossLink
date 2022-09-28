<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Projectdone;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectdoneController extends Controller
{
    public function index()
    {
        $data['project'] = Project::select('id', 'name', 'slug', 'description', 'img')->get();

        return view('pages.frontend.projects.index', $data);
        
    }
}
