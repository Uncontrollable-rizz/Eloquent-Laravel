<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Program;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Student::all();

        return view('showstudentsall', compact('students'));
    }


    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->full_name = trim("{$student->studfirstname} {$student->studmidname} {$student->studlastname}");
        return view('showid', compact('student'));
    }

    public function showCollege($id)
    {
//        $college = College::findOrFail($id);
//        $college->full_name = trim("{$college->collegefullname} {$college->collegeshortname}");
//        return view('showcollegeid', compact('college'));

        $college = College::with(['departments.programs'])->findOrFail($id);

        // Pass the $college data to the view
        return view('showcollegeid', compact('college'));
    }



    public function showColleges()
    {
        $colleges = College::all();

        return view('showallcolleges', compact('colleges'));
    }


    public function showDepartments(){
        $departments = Department::with('college')->get();

        // Pass the $departments data to the view
        return view('showdept', compact('departments'));

    }
}
