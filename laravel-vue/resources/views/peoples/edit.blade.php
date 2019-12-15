@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Edit peoples</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('/groups/'.$groupid.'/peoples/' ) }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
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

    <form action="{{ route('peoples.update',['groupid'=>$groupid,'people'=>$peoples->id]) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="hidden" name="groupid" value="{{ $peoples->groupid }}" class="form-control" placeholder="Name">
                    <input type="text" name="peopleid" value="{{ $peoples->peopleid }}" class="form-control" placeholder="Name">
                </div>
            </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RFID:</strong>
                  
                    <input type="text" name="rfid" value="{{ $peoples->rfid }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                   
                    <input type="text" name="name" value="{{ $peoples->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lastname:</strong>
                    <input type="text" name="lastname" value="{{ $peoples->lastname }}" class="form-control" placeholder="Name">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <input type="text" name="detail" value="{{ $peoples->detail }}" class="form-control" placeholder="Name">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection