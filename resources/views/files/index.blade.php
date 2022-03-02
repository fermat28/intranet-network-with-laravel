@extends('layouts.app-master')
<link rel="icon" href="{{ URL::asset('assets/img/favicon.png') }}" type="image/x-icon"/>
  <link rel="icon" href="{{ URL::asset('assets/img/apple-touch-icon.png') }}" type="image/x-icon"/>

  <!-- Bootstrap core CSS -->
  <link href= {{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}  rel="stylesheet">
  <!--external css-->
  <link href= {{ asset('assets/lib/font-awesome/css/font-awesome.css') }}  rel="stylesheet">
  <link href= {{ asset('assets/lib/font-awesome/css/zabuto_calendar.css') }}  rel="stylesheet">
  <link href= {{ asset('assets/lib/gritter/css/jquery.gritter.css') }}  rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href= {{ asset('assets/css/style.css') }}  rel="stylesheet">
  <link href= {{ asset('assets/css/style-responsive.css') }}  rel="stylesheet">
  <script src="{{ asset('assets/lib/chart-master/Chart.js')}}"></script>

@section('content')
<br/>
    <div class="row">
        <a href="{{ route('files.create') }}" class="btn btn-primary float-right mb-3">Add file</a>
        <center> <h2>Exercises Files</h2> </center>
        <br>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($exos as $exo)
                <tr>
                  <td width="3%">{{ $exo->id }}</td>
                  <td>{{ $exo->name }}</td>
                  <td>{{ $exo->type }}</td>
                  <td width="5%" ><a href= "{{route('filedownloaded' , ['id' => $exo->id])}}" class="btn btn-success btn-sm"  title="download file">Telecharger</a>
                <td>
                </tr>
              @endforeach
            </tbody>
          </table>
        <hr/>
          <center> <h2>Files uploaded</h2> </center>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($files as $file)
                <tr>
                  <td width="3%">{{ $file->id }}</td>
                  <td>{{ $file->name }}</td>
                  <td width="5%"><a href="{{ route('files.delete' , ["id" => $file->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>

        @include('layouts.partials.messages')
    </div>
@endsection
