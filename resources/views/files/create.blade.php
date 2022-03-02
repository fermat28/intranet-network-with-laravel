@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Add file</h1>

        <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
            @include('layouts.partials.messages')
            @csrf
            <div class="form-group mt-4">
              <input type="file" name="file" class="form-control">
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Save</button>
        </form>

    </div>
@endsection
