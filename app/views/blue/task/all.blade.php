@extends('layouts.master')

@section('content')
    
        <div class="row">
            <div class="col-md-offset-1 col-md-3">
                @include('project.nav')
            </div>
            <div class="col-md-7 well">
                <div class="row">
                        <center><h1 style="margin-top:-10px;">All projects:</h1></center>
                </div>
                <div class="row">
                    @foreach($tasks as $task)
                        <div class="col-sm-6">
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{ Link_to("/tasks/detail/". $task->id, $task->name) }}</h3>
                                </div>
                                <div class="panel-body">
                                    {{$task->description}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <center>
                {{ $tasks->links() }}
                </center>   
            </div>
        </div>
@stop