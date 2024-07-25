<?php

namespace App\Http\Controllers;

use App\Http\Request\SaveSchoolClassRequest;
use App\Models\SchoolClass;

class SchoolClassController extends Controller
{
    public function index()
    {
        $rows = SchoolClass::paginate();

        return view('classes.index', [
            'rows' => $rows
        ]);
    }

    public function create()
    {
        return view('classes.form', [
            'operation' => 'create',
            'model' => null,
            'method' => 'post',
            'action' => 'classes.store'
        ]);
    }

    public function store(SaveSchoolClassRequest $request)
    {
        $values = $request->all();

        SchoolClass::create($values);

        return redirect()
            ->to(route('classes.index'))
            ->with('success', 'Turma salva com sucesso.');
    }
    
    public function edit($id)
    {
        $model = SchoolClass::find($id);
        
        return view('classes.form', [
            'operation' => 'edit',
            'model' => $model,
            'method' => 'put',
            'action' => ['classes.update', $model->id]
        ]);
    }
    
    public function update($id, SaveSchoolClassRequest $request)
    {
        $values = $request->all();
        
        $model = SchoolClass::find($id);
        
        $model->fill($values)->save();
        
        return redirect()
            ->to(route('classes.index'))
            ->with('success', 'Turma salva com sucesso.');
    }
    
    public function destroy($id)
    {
        SchoolClass::destroy($id);
        
        return redirect()
            ->to(route('classes.index'))
            ->with('success', 'Turma removida com sucesso.');
    }
}
