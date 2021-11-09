<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code = "190813007";
    private $name = "Mohamad Rizky";
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;
    private $grade;

    public function myCourse ($course, $task, $quiz, $mid_term, $final) {
        $code = $this->code;
        $name = $this->name;
        $this->course = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;
        $this->final = $final;
        $grade = $this -> calculateGrade($task, $quiz, $mid_term, $final);

        return view(student/myView,['code'=>this->code, 'name'=>this->name, 'course'=>this->course, 'task'=>this->task, 
        'quiz'=>this->quiz, 'mid_term'=>this->mid_term, 'final'=>this->final, 'grade'=>this->grade, 'code'=>this->code])
    }

    private function calculateGrade () {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Ini teh Index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Ini teh Create";
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
