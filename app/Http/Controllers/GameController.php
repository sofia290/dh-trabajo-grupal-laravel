<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\User;
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
    $request = request();
    $numberQuestions = Question::all()->count();
    $randomNumber = rand(1,$numberQuestions);
    if(isset($request->token)){
      if ($request->user_answer == 0) {
        return redirect('/home'); 
      }
      $preguntaAnterior = Question::find($request->token);
      $user = User::find($request->user_id);
      $user->answered_questions = $user->answered_questions + 1;
      $respuestaElegida = Answer::find($request->user_answer);
      if ($respuestaElegida->correct == 1) {
        $user->score = $user->score + $preguntaAnterior->points;
      };
      $user->save();
      if ($randomNumber == $request->token) {
        $randomNumber = rand(1, $numberQuestions);
      };
    }
    $pregunta = Question::find($randomNumber);
    $respuestas = Answer::where('question_id', '=', $randomNumber)->get();
    return view('game', compact("pregunta", "respuestas"));
  }

  public function nextQuestion()
  {
    $request = request();
    $idPreguntaAnterior = $request->token;
    $numberQuestions = Question::all()->count();
    $randomNumber = rand(1,$numberQuestions);
    if ($randomNumber == $idPreguntaAnterior) {
      $randomNumber = rand(1,$numberQuestions);
    }
    $pregunta = Question::find($randomNumber);
    $respuestas = Answer::where('question_id', '=', $randomNumber)->get();
    return redirect('game', compact("pregunta", "respuestas"));
  }

}
