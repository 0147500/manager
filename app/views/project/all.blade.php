@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('project.nav')
            </div>
            <div class="col-md-9 well">
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-sm-6">
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ Link_to("/projects/detail/". $project->id, 'testproject') }}</h3>
                                </div>
                                <div class="panel-body">
                                    {{$project->description}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <center>
                {{ $projects->links() }}
                </center>   
            </div>
        </div>
    </div>
@stop