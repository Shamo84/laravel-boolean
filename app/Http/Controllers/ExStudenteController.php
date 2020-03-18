<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExStudenteController extends Controller
{
    private $students;

    public function __construct()
    {
      $this->students = config("students.students");
    }
    public function Show()
    {
      $data = $this->students;
      return view("carriere", compact("data"));
    }

    public function ShowStudent($id)
    {
      $student = $this->students[$id];
      return view("carriere-show", compact("student"));
    }
}
