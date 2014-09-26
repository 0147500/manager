@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked">
                    <li>{{ link_to('/projects/new', 'New project') }}</li>
                    <li class="active">{{ link_to('/projects/all', 'All projects') }}</li>
                    <li>{{ link_to('/projects/my', 'My projects') }}</li>
                    <li>{{ link_to('/projects/shared', 'Shared projects') }}</li>
                </ul>
            </div>
            <div class="col-md-9 well">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default"> 
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $project->name }}</h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ $project->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop