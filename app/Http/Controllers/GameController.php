<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class GameController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $numberQuestions = Question::all()->count();

      $randomNumber = rand(1,$numberQuestions);
      $pregunta = Question::find($randomNumber);
      $respuestas = Answer::where('question_id', '=', $randomNumber)->get();
      return view('game', compact("pregunta", "respuestas"));
  }
}
