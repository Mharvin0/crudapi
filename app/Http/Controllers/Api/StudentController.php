<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StoreStudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return StudentResource::collection($students);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return new StudentResource($student);
    }

    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        //
    }


    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return new StudentResource($student);

    }


    public function destroy(Student $student)
    {
        $student->delete();
        return response(null, 204);
    }
}
