@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                @can('edit')
                
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h2>Add Books</h2>
                        </br>
                        <h5></h5>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    </div>

                </div>
                @endcan
                
            </div>
        </div>
    </div>
</div>
@endsection
