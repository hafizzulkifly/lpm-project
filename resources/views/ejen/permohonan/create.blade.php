@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Permohonan') }}</div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tajuk</label>
                            <input type="text" name="tajuk" class="form-control" placeholder="Avengers">
                        </div>
                        <div class="form-group">
                            <label>Tarikh</label>
                            <input type="text" name="tarikh" class="form-control" placeholder="8 Januri 2020">
                        </div>
                       
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
