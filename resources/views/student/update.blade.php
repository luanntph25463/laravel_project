@extends('template.layouts')
@section('content')
<a type="submit" class="btn btn-primary" href="{{ route('student.list') }}">Quay Lại</a>

<form method="POST" action="{{ route('student_edit',['id'=>$student->id]) }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $student->email }}" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label class="col-md-3 col-sm-4 control-label">Ảnh CMND/CCCD</label>
        <div class="col-md-9 col-sm-8">
            <div class="row">
                <div class="col-xs-6">
                    <img id="mat_truoc_preview" src="{{$student->image? ''.Storage::url($student->image): ''}}" alt="your image"
                         style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                    <input type="file" name="image" accept="image/*"
                           class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                    <label for="cmt_truoc">Mặt trước</label><br/>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary m-3">Add Student</button>
</form>

@endsection

@section('script')
<script>
    $(function(){
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc").change(function () {
            readURL(this, '#mat_truoc_preview');
        });

    });
</script>
@endsection
