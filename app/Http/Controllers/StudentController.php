<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code = "190613001";
    private $name = "Ana";
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;
    private $grade;
    
    public function myCourse($course, $task, $quiz, $mid_term, $final){
        $code = $this -> code;
        $name = $this -> name;
        $this -> course = $course;
        $this -> task = $task;
        $this -> quiz = $quiz;
        $this -> mid_term = $mid_term;
        $this -> final = $final;
        $grade = $this -> grade();

        return view('student.my_view', compact('code', 'name', 'course', 'task', 'quiz', 'mid_term', 'final', 'grade'));
    }
    private function grade(){
        $course = $this -> course;
        $task = $this -> task;
        $quiz = $this -> quiz;
        $mid_term = $this -> mid_term;
        $final = $this -> final;
        $this -> grade = ($task * 0.1) + ($quiz * 0.1) + ($mid_term * 0.3) + ($final * 0.5);
        return $this -> grade;
    }
}
