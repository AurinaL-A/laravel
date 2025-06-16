<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{

    
    public function index(){
        $reports = Report::where('user_id', Auth::user()->id)->get();
        $userId = Auth::id();
        return view ('dashboard', compact('reports','userId'));
    }

    public function create(){
        $reports = Report::all();
        return view ('report.create', compact('reports'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'count' => ['required', 'integer'],
        ]);

        Report::create([
            'title' => $request->title,
            'count' => $request->count,
            "user_id" => Auth::user()->id,
            "furniture_id" => $request->furniture,

        ]);


        return redirect()->route('dashboard');
    }
}
