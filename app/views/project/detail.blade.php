@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-offset-1 col-md-3">
                @include('project.nav')
            </div>
            <div class="col-md-7 well">
                <div class="row">
                        <center><h1 style="margin-top:-10px;margin-bottom:-10px;">Project overview:</h1></center>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header">
                            <h1>{{ $project->name }} <small>{{ $project->status }}</small></h1>
                        </div>
                        <p>{{ $project->description }}</p>    
                    </div>
                </div>
                {{ link_to('/projects/edit/'. $project->id,'Edit project', array('class' => 'btn btn-success btn-md'))}}
            </div>
        </div>
@stop