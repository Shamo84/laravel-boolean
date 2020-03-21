<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;

  public function __construct()
  {
    $this->students = config("students.students");
  }

  public function getForAge($age)
  {
    $students = $this->students;
    $studentsFiltered = [];
    foreach ($students as $student) {
      if($student['age'] == $age) {
        $studentsFiltered[] = $student;
      }
    }
    return response()->json($studentsFiltered);
  }

  public function filter(Request $request)
  {
    $students = $this->students;
    $data = $request->all();
    $studentsFiltered = $students;
    foreach ($data as $key => $value) {
      $studentsFiltered = $this->filterBy($studentsFiltered, $key, $value);
    }
    return response()->json($studentsFiltered);
  }

  private function filterBy($array, $key, $value)
  {
    $filtered = [];
    foreach ($array as $element) {
      if ($element[$key] == $value) {
        $filtered[] = $element;
      }
    }
    return $filtered;
  }
}
