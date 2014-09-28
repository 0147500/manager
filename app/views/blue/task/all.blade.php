@extends('layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-offset-1 col-md-3">
                @include('task.nav')
            </div>
            <div class="col-md-7 well">
                <div class="row">
                        <center><h1 style="margin-top:-10px;">All tasks:</h1></center>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title"></h3>
                                </div>
                                <div class="panel-body">
                                </div>
                            </div>
                        </div>
                </div>
                <center>
                </center>   
            </div>
        </div>
@stop