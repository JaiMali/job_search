@extends('layouts.user')
@section('content')
    <div class="col-xs-12 col-sm-8">
        <div class="page-header">
            <h3>Add new Internship Preference</h3>
        </div>
        <div class="internship-p-form">
            <form data-parsley-validate="" action="{{route('internships_program.store',['user'=> $user])}}"
                  method="post"  class="main-forms" id="add_internship_parsley_form">
                {{method_field('POST')}}
                @include('company.internship_program._form')
            </form>
        </div>
    </div>
@stop