<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Automationproject;
use App\Models\Automation;
use Illuminate\Http\Request;

class AutomationprojectController extends Controller
{
    public function index()
    {
        $data['automation'] = Automation::select('id', 'header', 'icon', 'detail')->get();

        return view('pages.frontend.automation-project.index', $data);
        
    }
}
