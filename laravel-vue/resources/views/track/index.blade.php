@extends('layout.main')

@section('content')

@if ($status == 'success')
        <div class="alert alert-success" id="status">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($status == 'error')
        <div class="alert alert-danger" id="status">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="col-xs-4 col-sm-6 col-md-4">
        <div class="form-group">
            <form action="{{ url('/track/manual/add') }}" method="get">
               <input type="text" name="peopleid" class="form-control text-success" placeholder="Add ID and Enter" autofocus>
               <input type="hidden" name="trackby" class="form-control text-success"  value="manual_add">
              
            </form>
        </div>
    </div>
<script>
 var mystatus = setInterval(myStat, 3000);
        var Per = setInterval(myPer, 3000);

        function myStat() {
            var element = document.getElementById("status");
                element.hidden = true;
                
        }

</script>
@endsection