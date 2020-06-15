<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoinController extends Controller
{
    protected $coin;

    public function __construct(){
        $this->coin = config('coin');
    }

    public function getStats(){
        $coin = $this->coin;
        return view('coinstats', compact('coin'));
    }
}
