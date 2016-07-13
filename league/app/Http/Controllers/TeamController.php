<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

use App\Http\Requests;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teams', ['teams' => Team::all()]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homeTeam = $request->get('homeTeam');
        $homeScore = $request->get('homeScore');
        $awayTeam = $request->get('awayTeam');
        $awayScore = $request->get('awayScore');

        if ($homeScore > $awayScore) {
            $this->teamWon($homeTeam);
            $this->teamLost($awayTeam);
        } else if ($awayScore > $homeScore) {
            $this->teamWon($awayTeam);
            $this->teamLost($homeTeam);
        } else {
            $this->teamsDrew($homeTeam, $awayTeam);
        }


        return Team::all();
    }

    public function teamWon($teamId){
        $team = Team::find($teamId);

        $team->won = $team->won + 1;
        $team->points = $team->points + 3;

        $team->save();
    }

    public function teamLost($teamId){
        $team = Team::find($teamId);

        $team->lost = $team->lost + 1;

        $team->save();
    }

    public function teamsDrew($team1, $team2)
    {

        $team1 = Team::find($team1);
        $team2 = Team::find($team2);

        $team1->drew = $team1->drew + 1;
        $team1->points = $team1->points + 1;

        $team2->drew = $team2->drew + 1;
        $team2->points = $team2->points + 1;

        $team1->save();
        $team2->save();

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function newTeam(Request $request) {
        $insert['teamName'] = $request->get('teamName');
        $insert['won'] = $request->get('won');
        $insert['lost'] = $request->get('lost');
        $insert['drew'] = $request->get('drew');
        $insert['points'] = $request->get('points');

        return Team::create($insert);
    }
}
