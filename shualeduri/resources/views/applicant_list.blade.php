@extends('home')
@section('content')

    <title>Applicants</title>
    <table>
        @foreach($applicant_list as $applicant)
            <div class="bg-gray-800  text-white">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <ul>
                                    <li>name-{{$applicant->name}},</li>
                                    <li>username-{{$applicant->surname}},</li>
                                    <li>position-{{$applicant->position}},</li>
                                    <li>phone-{{$applicant->phone}},</li>
{{--                                    @if($applicant->is_hired)--}}
{{--                                    <li>is_hired-hired,</li>--}}
{{--                                    @else--}}
{{--                                        <li>is_hired-not_hired,</li>--}}
{{--                                    @endif--}}
                                        @if($applicant->is_hired)
                                            <div class="ml-4 text-lg leading-7 font-semibold">

                                                <form method="post" action="{{route('hired',$applicant->id)}}">

                                                    @csrf
                                                    <button type="submit" class="fa fa-trash">
                                                        <li>is_hired-აყვანილია</li>
                                                    </button>
                                                </form>
                                            </div>
                                        @else
                                            <div class="ml-4 text-lg leading-7 font-semibold">

                                                <form method="post" action="{{route('hired',$applicant->id)}}">

                                                    @csrf
                                                    <button type="submit" class="fa fa-trash">
                                                        <li>is_hired-აყვანა</li>                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                </ul>
                            </div>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{route('applicant.edit', $applicant->id)}}" class="underline text-gray-900 dark:text-white">
                                    <i class="fa fa-pencil-scuare text-white">edit</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </table>
@endsection
