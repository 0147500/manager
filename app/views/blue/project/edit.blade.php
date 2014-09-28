@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            @include('project.nav')
        </div>
        <div class="col-md-7 well">
            <h3>Edit project:</h3>
                {{ $errors->first('name') }}
                {{ $errors->first('description') }}
                {{ Form::open(array('url' => "projects/edit/". $project->id)) }}
                    {{ Form::label('name', 'Project name', array('class' => 'control-label'))}}
                    {{ Form::text('name',$project->name,array('class' => 'form-control', 'placeholder' => 'Project name', 'required' => ''))}}
                    <br>
                    {{ Form::label('description', 'Project description', array('class' => 'control-label'))}}
                    {{ Form::textarea('description',$project->description,array('class' => 'form-control', 'placeholder' => 'Project description', 'required' => ''))}}
                    <br>
                    {{ Form::label('status', 'Project status', array('class' => 'control-label'))}}
                    {{ Form::select('status', array(
                        'planning' => 'Planning',
                        'wip' => 'Work in proccess',
                        'done' => 'Done'
                        ),$project->status ,array('class' => 'form-control', 'placeholder' => 'Project description', 'required' => ''))
                    }}
                    <br>
                    
                    <button type="submit" class="btn btn-success btn-lg">update project</button>
                {{ Form::close() }}
        </div>
    </div>
@stop