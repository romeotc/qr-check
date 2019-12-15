@extends('layout.main')


@section('content')
     



<div class="row">
        <div class="col-md-5 margin-tb">
            
        <h4>Manage Group <span class="font-weight-bold text-primary">{{ $groups->name }} </span></h4>
            </div>
            <br>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('groups.index') }}"> Back</a>
            </div>
               
            <div class="col-md-4">
                <form action="{{ url('/peoples/search') }}" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" value="" placeholder="Enter to show all or input to filter" autofocus>
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </span>
                    </div>
                </form>
            </div>

            <div class="col-md-2">
                <a class="btn btn-success" href="{{ url('/groups/'.$groups->id.'/peoples/create/' ) }}"> + New people..</a> 
            </div>

           
 </div>

 <br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered  table-hover">
    <thead class="thead-light">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th >Action</th>
        </tr>
    </thead>
    @foreach ($peoples as $row)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $row->name }} {{ $row->lastname }} </td>
        <td>{{ $row->detail }}</td>
        <td>
        <form action="{{ route('peoples.destroy',['groupid'=>$groups->id,'people'=>$row->id]) }}" method="POST">
                   
                
                    <a class="btn btn-primary" href="{{ route('peoples.edit',['groupid'=>$groups->id,'people'=>$row->id]) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
        </td>
    </tr>
    @endforeach
</table>


{!! $peoples->links() !!}



@endsection

     