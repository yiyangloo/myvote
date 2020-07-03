<?php

namespace App\Http\Controllers;

use App\Election;
use App\User;
use App\Vote;
use DB;
use App\Charts\ElectionResultChart;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $elections = Election::all()->sortByDesc('end_date');
        $candidates = User::where('role', 1)->get();
        return view('candidate/index', compact('candidates','elections'));
    }

    public function store(Request $request)
    {   
        $data = request()->validate([
            'election_title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'election_description' => 'required',
        ]);

        $candidates_id = User::whereIn('id', $request->election_candidate)->get();
        $election = new Election($data);
        $election->save();
        $election->candidates()->sync($candidates_id);
        return redirect()->back();
    }
}

