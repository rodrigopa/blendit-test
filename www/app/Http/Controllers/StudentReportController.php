<?php

namespace App\Http\Controllers;

use App\Enum\Grade;
use App\Enum\Segment;
use App\Models\SchoolClass;
use App\Models\Student;

class StudentReportController extends Controller
{
    public function grade()
    {
        $options = Grade::options();
        $students = null;
        
        if (!is_null(request()->input('grade'))) {
            $students = Student::query()
                ->where('grade', request()->input('grade'))
                ->get();
        }
        
        return view('report-students.grade', [
            'options' => $options,
            'students' => $students
        ]);
    }
    
    public function segment()
    {
        $options = Segment::options();
        $students = null;
        
        if (!is_null(request()->input('segment'))) {
            $students = Student::query()
                ->where('segment', request()->input('segment'))
                ->get();
        }
        
        return view('report-students.segment', [
            'options' => $options,
            'students' => $students
        ]);
    }
    
    public function schollClass()
    {
        $options = SchoolClass::query()->pluck('name', 'id');
        $students = null;
        
        if (!is_null(request()->input('class'))) {
            $students = Student::query()
                ->where('class_id', request()->input('class'))
                ->get();
        }
        
        return view('report-students.class', [
            'options' => $options,
            'students' => $students
        ]);
    }
}
