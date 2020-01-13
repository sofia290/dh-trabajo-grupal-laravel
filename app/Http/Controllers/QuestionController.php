<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use App\GameMode;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $preguntas = Question::all();
      $respuestas = Answer::all();
      return view("/questions/all", compact("preguntas", "respuestas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modos = GameMode::all();
        return view('questions.create', compact("modos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
          "text" => "required|unique:questions",
          "points" => "required|integer|min:5|max:20",
          "game_mode" => "required|integer"
        ];
        $mensajes = [
          "text.required" => "La pregunta es obligatoria",
          "points.required" => "Pone la cantidad de puntos de la pregunta",
          "game_mode.required" => "Ingrese el modo de juego correspondiente",
          "min" => "",
          "max" => ""
        ];

        //validacion
        $this->validate($request, $reglas, $mensajes);

        $nuevaPregunta = new Question();
        $nuevaPregunta->text = $request->text;
        $nuevaPregunta->points = $request->points;
        $nuevaPregunta->game_mode_id = $request->game_mode;
        $nuevaPregunta->true_or_false = $request->debunk;
        $nuevaPregunta->save();

        return redirect("/questions/all");



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pregunta = Question::find($id);
      //mejorar vista
      return $pregunta->id . ". " . $pregunta->text . "<br> Puntos: " . $pregunta->points;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pregunta = Question::find($id);
      return view('questions.edit', compact('pregunta'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $texto = $request->text;
        $puntos = $request->points;

        $question = Question::find($id);
        $question->text = $texto;
        $question->points = $puntos;
        $question->save();

        return redirect("/questions/all");

    }
    public function verify($id)
    {
      $pregunta = Question::find($id);
      $pregunta->verified = 1;
      $pregunta->save();
      return redirect("/questions/all");
    }
    public function deactivate($id)
    {
      $pregunta = Question::find($id);
      $pregunta->verified = 0;
      $pregunta->save();
      return redirect("/questions/all");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pregunta = Question::find($id);
      $pregunta->delete();

      return redirect("/questions/all");
    }

    public function getLink(){
        return "<a href='/questions/".$this->id."'>" ."</a>";
    }
    public function verifyQuestion()
    {
      // code...
    }
}
