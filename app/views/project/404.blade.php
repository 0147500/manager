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
                    <h1>Oops, That project can't be found.</h1>
                </div>  
            </div>
        </div>
    </div>
@stop