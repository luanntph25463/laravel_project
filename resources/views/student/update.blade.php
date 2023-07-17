@extends('template.layouts')
@section('content')
<a type="submit" class="btn btn-primary" href="{{ route('student.list') }}">Quay Lại</a>

<form method="POST" action="{{ route('student_edit',['id'=>$student->id]) }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $student->email }}" id="email" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary m-3">Add Student</button>
</form>

@endsection
