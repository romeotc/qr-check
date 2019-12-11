@extends('layout.main')


@section('content')
     
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h4>Manage Group <span class="font-weight-bold text-primary">{{ $groups->name }} </span></h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('groups.index') }}"> Back</a>
            </div>
        </div>
    </div>

     @endsection

     