@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-md-6 margin-tb">
            
                <h4>Group Table</h4>
            </div>
            
               
            <div class="col-md-4">
                <form action="{{ url('/groups/search') }}" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" value="" placeholder="Enter to show all or input to filter" autofocus>
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </span>
                    </div>
                </form>
            </div>

            <div class="col-md-2">
                <a class="btn btn-success" href="{{ route('groups.create') }}"> + New Group</a> 
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
        @foreach ($groups as $group)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $group->name }}</td>
            <td>{{ $group->detail }}</td>
            <td>
                <form action="{{ route('groups.destroy',$group->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('groups.show',$group->id) }}">Show</a>
                    <a class="btn btn-success" href="{{ url('groups/'.$group->id.'/peoples/' )}}">Manage</a>
                    <a class="btn btn-primary" href="{{ route('groups.edit',$group->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $groups->links() !!}

@endsection
14-12-62