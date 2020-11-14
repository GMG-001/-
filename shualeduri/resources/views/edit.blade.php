@extends('home')
@section('content')
    <div class="box box-primary border-b border-gray-800 bg-gray-900 text-white my-8">
        <div class="cox-header with-border">
            <h3 class="box-title mx-64 text-gray-500">edit post</h3>
        </div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        @endif
        <form class="mx-20" method="post" enctype="multipart/form-data" action="{{route('applicant.update', $applicant->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="name" value="{{old('name', $applicant->name)}}">
{{--                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="name" value="{{old('name', $applicant->name)}}" required>--}}
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="surname" value="{{old('surname', $applicant->surname)}}">
{{--                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="username" value="{{old('username', $applicant->surname)}}" required>--}}
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="position" value="{{old('position', $applicant->position)}}">
{{--                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="position" value="{{old('position', $applicant->position)}}" required>--}}
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="phone" value="{{old('phone', $applicant->phone)}}" >
{{--                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="phone" value="{{old('phone', $applicant->phone)}}" required>--}}
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="is_hired" value="{{old('is_hired', $applicant->is_hired)}}">
{{--                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="is_hired" value="{{old('is_hired', $applicant->is_hired)}}">--}}
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn bg-gray-800 mx-40">update</button>
            </div>
        </form>
    </div>
@endsection
