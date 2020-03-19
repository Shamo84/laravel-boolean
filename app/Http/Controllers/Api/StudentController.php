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

  public function age()
  {
    $students = $this->students;
    return response()->json($students);
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
        // $students = config('students.students');
        $students = $this->students;
        $data = $request->all();
  
        if(!empty($data['age'])) {
            $age = $data['age'];
        }
        if(!empty($data['name'])) {
            $name = $data['name'];
        }


        $studentsFiltered = [];

        //filtriamo su age
        if(!empty($age)) {
            foreach ($students as $student) {
                if ($student['age'] == $age) {
                    $studentsFiltered[] = $student;
                }
            }
        }

        return response()->json($studentsFiltered);
  }
  }
