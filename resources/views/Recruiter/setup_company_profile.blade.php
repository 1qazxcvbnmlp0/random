@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recruiter Page') }}</div>


                <div class="card-body">
                   
                   {!! Form::open(['action'=>'CompanyController@store', 'method'=>'post']) !!}
                        {!! Form::label('company_name', 'Company Name', ['class'=>'']) !!}
                        <div class="mt-2 mb-2">
                            {!! Form::text('company_name', null, ['class'=>'form-control', 'id'=>'company_name']) !!}
                        </div>

                        {!! Form::label('industry_type', 'Industry Type', ['class'=>'']) !!}
                        <div class="mt-2 mb-2">
                            {!! Form::text('industry_type', null, ['class'=>'form-control', 'id'=>'industry_type']) !!}
                        </div>
                        <div class="mt-2 mb-2">
                            {!! Form::submit('Done', ['class'=>['btn', 'btn-primary']]) !!}
                        </div>
                   {!! Form::close() !!}
                   
                </div>

  


            </div>
        </div>
    </div>
</div>
@endsection