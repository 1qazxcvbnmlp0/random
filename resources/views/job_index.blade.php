@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recruiter Page') }}</div>


                <div class="card-body">
                   
                    <a href="{{route('job.index')}}">Job Home</a>

                    {!! Form::open() !!}

                        <div class="alert-success">
                            Description
                        </div>

                        {!! Form::text('job_title', null, ['class'=>'form-control','placeholder'=>'Title']) !!}
                        {!! Form::select('job_title',[1=>'a', 2=>'b'], null, ['class'=>'form-control','placeholder'=>'Category']) !!}
                        {!! Form::text('location', null, ['class'=>'form-control','placeholder'=>'Location']) !!}
                        {!! Form::text('head_count', null, ['class'=>'form-control','placeholder'=>'Head Count']) !!}
                        {!! Form::textarea('job_description', null, ['class'=>'form-control','placeholder'=>'Title']) !!}

                        <div class="alert-success">
                            Required Qualification
                        </div>

                        <div class="row">
                            {!! Form::select('education',[1=>'a', 2=>'b'], null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Education']) !!}
                         in 
                            {!! Form::select('category',[1=>'a', 2=>'b'], null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Category']) !!}
                        </div>
                        {!! Form::select('experience',[1=>'a', 2=>'b'], null, ['class'=>['form-control'],'placeholder'=>'Experience']) !!}
                      <div class="row">
                        {!! Form::select('gender',[1=>'a', 2=>'b'], null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Age']) !!}
                        {!! Form::select('age',[1=>'a', 2=>'b'], null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Gender']) !!}
                      </div>
                        {!! Form::text('skills', null, ['class'=>['form-control'],'placeholder'=>'Skills']) !!}
                        {!! Form::textarea('skills', null, ['class'=>['form-control'],'placeholder'=>'Skills']) !!}

                        <div class="alert-success">
                            Benefits
                        </div>
                        {!! Form::text('salary', null, ['class'=>['form-control'],'placeholder'=>'Salary']) !!}
                        {!! Form::textarea('benefits', null, ['class'=>['form-control'],'placeholder'=>'Benefits']) !!}

                        <div class="alert-success">
                            Others
                        </div>
                        {{-- Deadline --}}
                        {!! Form::date('deadline', null, ['class'=>'form-control','placeholder'=>'deadline']) !!}
                        {!! Form::number('max_applicant', null, ['class'=>'form-control','placeholder'=>'Maximum Applicants']) !!}
                        {!! Form::select('pipeline',[1=>'a', 2=>'b'], null, ['class'=>['form-control'],'placeholder'=>'Pipeline']) !!}
                        {!! Form::select('recruitment_team',[1=>'a', 2=>'b'], null, ['class'=>['form-control'],'placeholder'=>'Recruitment Team']) !!}

                        {!! Form::submit('Finalize', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                   
                </div>

  


            </div>
        </div>
    </div>
</div>
@endsection