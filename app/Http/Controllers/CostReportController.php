<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostReport;

class CostReportController extends Controller
{
    public function index()
    {
        $reports = CostReport::all();
        return view('components.cost-report', compact('reports'));
    }
}
