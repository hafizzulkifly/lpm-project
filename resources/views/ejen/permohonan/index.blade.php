@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('message'))
                <div class="alert {{ session()->get('type') }}">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    {{ __('Todos Index') }}

                    <div class="float-right">
                        <form action="" method="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" value="{{ request()->get('keyword') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Tajuk</th>
                            <th>Tarikh</th>
                         
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($permohonan as $application)
                                <tr>
                                    <td> {{ $application->id }}</td>
                                    <td> {{ $application->tajuk }}</td>
                                    <td> {{ $application->tarikh }}</td>
                                
                                    <td>
                                        <a class="btn btn-primary" href="">Show</a>
                                        <a class="btn btn-success" href="">Edit</a>
                                        <a onclick="return confirm('Are you sure')" class="btn btn-danger" href="">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
