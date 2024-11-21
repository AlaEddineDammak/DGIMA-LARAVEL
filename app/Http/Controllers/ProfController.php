<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function ProfDashboard() {

        return view('prof.prof_dashboard');

    }
}
