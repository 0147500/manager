@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-offset-1 col-md-3">
                @include('task.nav')
            </div>
            <div class="col-md-7 well">
                <div class="row">
                        <center><h1 style="margin-top:-10px;margin-bottom:-10px;">Task overview:</h1></center>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header">
                            <h1>{{ $task->name }} <small>{{ $task->status }}</small></h1>
                        </div>
                        <p>{{ $task->description }}</p>    
                    </div>
                </div>
                {{ link_to('/tasks/edit/'. $task->id,'Edit task', array('class' => 'btn btn-success btn-md'))}}
            </div>
        </div>
@stop