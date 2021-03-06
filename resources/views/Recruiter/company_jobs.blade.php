@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recruiter Page') }}</div>


                @foreach($jobs as $job)
                    <div class="alert-success">{{$job->id}}</div>
                    <div>{{$job->title}}</div> 
                    <div>{{$job->experience}}</div> 
                    <div>{{$job->skills}}</div> 
                    <div>{{$job->responsibilities}}</div> 
                    <div>{{$job->salary}}</div> 

                @endforeach

  


            </div>
        </div>
    </div>
</div>
@endsection