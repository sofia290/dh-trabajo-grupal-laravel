<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $respuestas = Answer::all();
      return view("/answers/all", compact("respuestas"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntas = Question::all();
        return view('answers.create', compact("preguntas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $pregunta = Question::where('text', '=', $request->question_id);
      $reglas = [
        "text" => "required",
        "correct" => "required|integer|min:0|max:1",
        "question_id" => "required|integer"
      ];
      $mensajes = [
        "text.required" => "La pregunta es obligatoria",
        "correct.required" => "Ingrese si es correcta o no",
        "question_id.required" => "Ingrese el id de la pregunta correspondiente",
      ];

      //validacion
      $this->validate($request, $reglas, $mensajes);

      $nuevaRespuesta = new Answer();
      $nuevaRespuesta->text = $request->text;
      $nuevaRespuesta->correct = $request->correct;
      $nuevaRespuesta->question_id = $request->question_id;
      $nuevaRespuesta->save();

      return redirect("/answers/all");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respuesta = Answer::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $respuesta = Answer::find($id);
      $preguntas = Question::all();
      return view('answers.edit', compact('respuesta', 'preguntas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $texto = $request->text;
      $correcto = $request->correct;
      $idPregunta = $request->question_id;

      $answer = Answer::find($id);
      $answer->text = $texto;
      $answer->correct = $correcto;
      $answer->question_id = $idPregunta;

      $answer->save();

      return redirect("/answers/all");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $respuesta = Answer::find($id);
      $respuesta->delete();

      return redirect("/answers/all");
    }
}
