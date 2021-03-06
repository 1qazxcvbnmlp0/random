@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recruiter Page') }}</div>


                <div class="card-body">
                   
                   <a class="btn btn-success" href="{{route('job.create')}}">Create Job</a>
                   <a class="btn btn-secondary" href="{{route('job.index')}}">View Jobs</a>
                   <a class="btn btn-primary" href="{{route('setupCompanyProfile.index')}}">Setup Company Profile</a>
                   
                </div>

  


            </div>
        </div>
    </div>
</div>
@endsection