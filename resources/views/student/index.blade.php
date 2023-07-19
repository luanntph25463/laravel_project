@extends('template.layouts')
@section('content')
<a href="{{ route('student_add') }}"><i class="fa-solid fa-plus"></i>Create</a>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Hình</td>
        </tr>
    </thead>
    <tbody>
            @foreach ( $user1 as  $user)
        <tr>

                <th>{{$user->id}}</th>
                <th>{{$user->name}}</th>
                <th>{{$user->email}}</th>
                <th><img width="100" src="{{$user->image? ''.Storage::url($user->image): ''}}" alt=""></th>
                <th><a class="btn-warning" href="{{ route('student_edit', ['id'=>$user->id]) }}">Sửa</a></th>
                <th><a class="btn-warning" href="{{ route('student_delete', ['id'=>$user->id]) }}">Xóa</a></th>
        </tr>

            @endforeach
    </tbody>
</table>
@endsection
