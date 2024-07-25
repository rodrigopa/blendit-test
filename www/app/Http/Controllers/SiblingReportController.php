<?php

namespace App\Http\Controllers;

use App\Enum\Segment;
use App\Http\Request\SaveStudentRequest;
use App\Models\Student;

class SiblingReportController extends Controller
{
    public function index()
    {
        $rows = Student::paginate();
        $options = Segment::options();
        $student = null;
        $siblings = null;
        $found = null;
        
        if (!is_null(request()->input('name')) && !is_null(request()->input('grade'))) {
            $student = Student::query()
                ->whereRaw('LOWER(name) = ?', [strtolower(request()->input('name'))])
                ->first();
            
            if ($student) {
                $siblings = Student::query()
                    ->whereRaw('LOWER(mother_name) = ?', [strtolower($student->mother_name)])
                    ->where('id', '<>', $student->id)
                    ->get();
                $found = true;
            } else {
                $found = false;
            }
        }
        
        return view('report-siblings.index', [
            'rows' => $rows,
            'options' => $options,
            'student' => $student,
            'siblings' => $siblings,
            'found' => $found
        ]);
    }
}
