@extends('layout')

@section('content')
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ $student->name }}" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Course:</label><br>
            <input type="text" name="course" value="{{ $student->course }}" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Subject:</label><br>
            <input type="text" name="subject" value="{{ $student->subject }}" required>
        </div>
        <button type="submit" class="btn btn-green">Update Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-blue">Back to List</a>
    </form>
@endsection