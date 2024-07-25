<?php

namespace App\Http\Controllers;

use App\Enum\Grade;
use App\Http\Request\EnrollRequest;
use App\Models\SchoolClass;
use App\Models\Student;

class StudentEnrollController extends Controller
{
    public function index()
    {
        $options = Grade::options();
        $students = null;
        $classes = SchoolClass::query()
            ->where('year', date('Y'))
            ->pluck('name', 'id');
        
        if (!is_null(request()->input('grade'))) {
            $students = Student::query()
                ->where('grade', request()->input('grade'))
                ->whereNull('class_id')
                ->get();
        }
        
        return view('students-enroll.index', [
            'options' => $options,
            'students' => $students,
            'classes' => $classes
        ]);
    }
    
    public function enroll(EnrollRequest $request)
    {
        $student = Student::query()->find($request->student_id);
        $student->class_id = $request->class_id;
        $student->save();
        
        return redirect()->back()->with('success', 'Aluno matriculado com sucesso!');
    }
}
