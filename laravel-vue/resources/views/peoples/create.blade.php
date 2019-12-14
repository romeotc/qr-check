@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Add New People</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/groups/'.$groupid->id.'/peoples/' ) }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peoples.store', $groupid->id ) }}" method="POST">
        @csrf

         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" name="groupid" class="form-control" placeholder="groupid" value="{{ $groupid->id}}">
                    <input type="text" name="peopleid" class="form-control" placeholder="Name">
                   
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RFID:</strong>
                   
                    <input type="text" name="rfid" class="form-control" placeholder="RFID">
                   
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lastname"  class="form-control" placeholder="Lastname">
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection