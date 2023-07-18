<?php

namespace App\Http\Controllers;

use App\Models\FieldQuestion;
use App\Http\Requests\StoreFieldQuestionRequest;
use App\Http\Requests\UpdateFieldQuestionRequest;
use Illuminate\Http\Request;

class FieldQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $fieldquestion = FieldQuestion::all();
        return view('pages.fieldquestion.index',['fieldquestion'=>$fieldquestion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.fieldquestion.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFieldQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        FieldQuestion::create($input);
        return redirect('fieldquestions')->with('thongbao', 'Thêm lĩnh vực thành công');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fieldquestion = FieldQuestion::find($id);
        return view('pages.fieldquestion.show')->with('fieldquestion', $fieldquestion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fieldquestion = FieldQuestion::find($id);
        return view('pages.fieldquestion.edit')->with('fieldquestion', $fieldquestion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldQuestionRequest  $request
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fieldquestion = FieldQuestion::find($id);
        $input = $request->all();
        $fieldquestion->update($input);
        return redirect('fieldquestions')->with('thongbao', 'Cập nhật lĩnh vực thành công');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldQuestion  $fieldQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FieldQuestion::destroy($id);
        return redirect('fieldquestions')->with('fieldquestion', 'Xóa lĩnh vực thành công');  
    }
}
