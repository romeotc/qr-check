@extends('layout.main')


@section('content')
     
{{$group->name}}

<div class="row">
        <div class="col-md-5 margin-tb">
            
        <h4>Manage Group <span class="font-weight-bold text-primary">{{ $groups->name }} </span></h4>
            </div>
            <br>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('groups.index') }}"> Back</a>
            </div>
               
            <div class="col-md-4">
                <form action="{{ url('/groups/search') }}" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" value="" placeholder="Enter to show all or input to filter" autofocus>
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </span>
                    </div>
                </form>
            </div>

            <div class="col-md-2">
                <a class="btn btn-success" href="{{ route('groups.create') }}"> + New Student</a> 
            </div>

           


       
    





 </div>

@endsection

     