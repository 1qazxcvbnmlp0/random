@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recruiter Page') }}</div>


                <div class="card-body">
                   
                    <a href="{{route('job.index')}}">Job Home</a>

                    {!! Form::open(['method'=>'post', 'action'=>'CompanyCreateJob@store']) !!}

                        <div class="alert-success">
                            Description
                        </div>
                        {!! Form::hidden('company_id', Auth::user()->company->id, []) !!}
                        {!! Form::hidden('recruiting_manager_id', Auth::user()->id, []) !!}
                        {!! Form::text('title', null, ['class'=>'form-control','placeholder'=>'Title']) !!}
                        {!! Form::select('contract_type',[1=>'a', 2=>'b'], null, ['class'=>'form-control','placeholder'=>'Contract Type']) !!}
                        {!! Form::text('location', null, ['class'=>'form-control','placeholder'=>'Location']) !!}
                        {!! Form::text('head_count', null, ['class'=>'form-control','placeholder'=>'Head Count']) !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Description']) !!}

                        <div class="alert-success">
                            Required Qualification
                        </div>

                        <div class="row">
                            {!! Form::select('level',$level, null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Education']) !!}
                         in 
                            {!! Form::select('field_of_study',$field_of_study, null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Category']) !!}
                        </div>
                        {!! Form::select('experience',[1=>'a', 2=>'b'], null, ['class'=>['form-control'],'placeholder'=>'Experience']) !!}
                      <div class="row">
                        {!! Form::select('gender',[1=>'a', 2=>'b'], null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Age']) !!}
                        {!! Form::select('age',[1=>'a', 2=>'b'], null, ['class'=>['form-control', 'col-4'],'placeholder'=>'Gender']) !!}
                      </div>
                        {!! Form::text('skills_required', null, ['class'=>['form-control'],'placeholder'=>'Skills Required']) !!}
                        {!! Form::textarea('responsibilities', null, ['class'=>['form-control'],'placeholder'=>'Responsibilities']) !!}

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
                        {!! Form::number('maximum_applicants', null, ['class'=>'form-control','placeholder'=>'Maximum Applicants']) !!}
                        {!! Form::select('pipeline_id',[1=>'a', 2=>'b'], null, ['class'=>['form-control'],'placeholder'=>'Pipeline']) !!}
                        {!! Form::select('recruitment_team',[1=>'a', 2=>'b'], null, ['class'=>['form-control'],'placeholder'=>'Recruitment Team']) !!}

                        {!! Form::submit('Finalize', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                   
                </div>

  


            </div>
        </div>
    </div>
</div>
@endsection