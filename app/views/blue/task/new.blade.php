@extends('layouts.master')

@section('content')
    
        <div class="row">
            <div class="col-md-offset-1 col-md-3">
                @include('project.nav')
            </div>
            <div class="col-md-7 well">
                <h3>Quick task:</h3>
                {{ $errors->first('name') }}
                {{ $errors->first('description') }}
                {{ Form::open(array('url' => 'projects/new')) }}
                    {{ Form::label('name', 'Task name', array('class' => 'control-label'))}}
                    {{ Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Project name', 'required' => ''))}}
                    <br>
                    {{ Form::label('status', 'Task status', array('class' => 'control-label'))}}
                    {{ Form::select('status', array(
                        'planning' => 'Planning',
                        'wip' => 'Work in proccess',
                        'done' => 'Done'
                        ), 'planning',array('class' => 'form-control', 'placeholder' => 'Project description', 'required' => ''))
                    }}
                    <br>
                    <button type="submit" class="btn btn-success btn-lg">Create task</button>
                {{ Form::close() }}
            </div>
        </div>
@stop