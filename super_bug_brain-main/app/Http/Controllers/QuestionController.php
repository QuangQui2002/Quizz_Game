<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\FieldQuestion;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Http\Request;
use Toastr;
use Illuminate\Support\Arr;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('pages.questions.index',['questions'=> $questions]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions=FieldQuestion::all();
        return view('pages.questions.create',['questions'=>$questions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Question::create($input);
        return redirect('questions')->with('thongbao', 'Thêm câu hỏi thành công');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        return view('pages.questions.show',['question'=>$question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::find($id);
        return view('pages.questions.edit',['questions'=>$questions]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('questions')->with('thongbao', 'Cập nhật câu hỏi thành công');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Question::destroy($id);
        return redirect('questions')->with('question', 'Xóa câu hỏi thành công');  
    }

    // public function changeStatus($id){
    //     $getStatus = Question::select('status')->where('id',$id)->first();
    //     if($getStatus->status==1){
    //         $status = 0;
    //     }else{
    //         $status = 1;
    //     }
    //     Question::where('id',$id)->update(['status'=>$status]);
    //     Toastr::success('Status Successfully Changed', 'Success', ["positionClass" => "toast-top-right","closeButton"=> "true","progressBar"=> "true"]);
    //     return redirect()->back();
    // }
}
