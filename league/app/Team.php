<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];
    protected $table = 'leaderboard';
    public $timestamps = false;
    protected $primaryKey = 'team_id';

}
