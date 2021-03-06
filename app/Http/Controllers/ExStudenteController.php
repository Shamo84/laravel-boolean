<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class ExStudenteController extends Controller
{
    private $students;

    public function __construct()
    {
      $this->students = config("students.students");
      //$this->students = Student::all();
    }
    public function Show()
    {
      $data = $this->students;
      return view("carriere", compact("data"));
    }

    public function ShowStudent($slug)
    {
      $students = $this->students;
      foreach ($students as $student) {
        if ($student["slug"] == $slug) {
          $mystudent = $student;
        }
      }
      return view("carriere-show", compact("mystudent"));
    }
}
