@extends('layouts.app')

@section('content')



    <div class="container w-25 border mt-4">
        <h1 class="text-center">Create New Video</h1>

        @if($message = Session::get('success'))

        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>

        @endif

        {!! Form::open(['url' => ['store-video'], 'method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label('title','Title') }}
                {{ Form::text('title',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description','Description') }}
                {{ Form::text('description',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('duration','Duration') }}
                {{ Form::text('duration',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('rating','Rating') }}
                {{ Form::text('rating',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group text-center shadow-none">
                {!! Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) !!}

            </div>
        {!! Form::close() !!}

    </div>


@endsection
