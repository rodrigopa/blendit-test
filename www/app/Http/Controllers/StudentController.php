<?php

namespace App\Http\Controllers;

use App\Http\Request\SaveStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index()
    {
        $rows = Student::paginate();

        return view('students.index', [
            'rows' => $rows
        ]);
    }

    public function create()
    {
        return view('students.form', [
            'operation' => 'create',
            'model' => null,
            'method' => 'post',
            'action' => 'students.store'
        ]);
    }

    public function store(SaveStudentRequest $request)
    {
        $values = $request->all();

        Student::create($values);

        return redirect()
            ->to(route('students.index'))
            ->with('success', 'Estudante salvo com sucesso.');
    }
    
    public function edit($id)
    {
        $model = Student::find($id);
        
        return view('students.form', [
            'operation' => 'edit',
            'model' => $model,
            'method' => 'put',
            'action' => ['students.update', $model->id]
        ]);
    }
    
    public function update($id, SaveStudentRequest $request)
    {
        $values = $request->all();
        
        $model = Student::find($id);
        
        $model->fill($values)->save();
        
        return redirect()
            ->to(route('students.index'))
            ->with('success', 'Estudante salvo com sucesso.');
    }
    
    public function destroy($id)
    {
        Student::destroy($id);
        
        return redirect()
            ->to(route('students.index'))
            ->with('success', 'Estudante removido com sucesso.');
    }
}
