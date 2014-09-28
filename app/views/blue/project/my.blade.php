@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-offset-1 col-md-3">
            @include('project.nav')
        </div>
        <div class="col-md-7 well">
            <div class="row">
                <div class=""col-sm-5">
                        <div class="panel panel-default"> 
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ Link_to('/project/detail/user/jdfskjfds' , 'testproject') }}</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                </div>
                <div class=""col-sm-5">
                        <div class="panel panel-default"> 
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel title</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop