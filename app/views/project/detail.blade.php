@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('project.nav')
            </div>
            <div class="col-md-9 well">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header">
                            <h1>{{ $project->name }} <small>{{ $project->status }}</small></h1>
                        </div>
                        <p>{{ $project->description }}</p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop