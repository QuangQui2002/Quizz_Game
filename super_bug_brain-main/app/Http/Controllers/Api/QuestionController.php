<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\FieldQuestion;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function linhvuc(Request $linhvuc)
    {
        $linhvuc = FieldQuestion::all();
        return response()->json([
            'field_questions'=>$linhvuc
        ], 200,);

    }
    public function index(Request $req,$id)
    {
        $data = DB::table('questions')->where('category','=',$id)->get()->toArray();
        // $data->toArray();
        
        $array=[];
        for ($i = 0; $i < count($data); $i++) {
        $arr = [
            "category" => $data[$i]->category,
            
            "question" => $data[$i]->question,
            "correct_answer" => $data[$i]->correct_answer,
            "incorrect_answers" => [
                $data[$i]->incorrect1,  $data[$i]->incorrect2,  $data[$i]->incorrect3
            ]
        ];
        array_push($array, $arr);
        
    }
        return response()->json([
        "response_code" => 0,
            "results"=>$array,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
