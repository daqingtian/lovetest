<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class FormController extends Controller
{

//    public function count(Request $request)
//    {
//        $all = $request->all();
//
////        $classNum = $request->get('classnum')
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $forms =Form::all();   //获取数据库中的数据 起到查看功能
//        dd($forms);
//        $form=Form::create(array('name'=>Input::get('name'), 'text'=>Input::get('text')));

        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        if($form=Input::all()){
//            dd($form);
//        }   //获取用户输入
//        dd($request->all());//获取用户输入
//        return view('form');

        $data =$request->except('_token');
        $result=Form::create($data);
        if($result)
        {
            return response()->json('ok');
        }else{
            return response()->json('error');
        }

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
//    public function update(Request $request)//, $id
//    {
//        $all = $request->all();
//    }

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
