@extends('layout')

@section('content')
    <h2>Add New Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Name:</label><br>
            <input type="text" name="name" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Course:</label><br>
            <input type="text" name="course" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Subject:</label><br>
            <input type="text" name="subject" required>
        </div>
        <button type="submit" class="btn btn-green">Save Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-blue">Back to List</a>
    </form>
@endsection