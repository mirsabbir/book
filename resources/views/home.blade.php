@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                @can('edit')


                
                
                    <div class="container">
                        <form action="/home" method = "post" enctype='multipart/form-data'>
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Book name</label>
                                <input type="text" name="name" class="form-control" placeholder="Book name">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Publisher</label>
                                <input type="text" name="publisher" class="form-control"  placeholder="Publisher">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tag 1</label>
                                <input type="text" name="tag1" class="form-control" id="inputAddress" placeholder="physics / chemistry...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tag 2</label>
                                <input type="text" name="tag2" class="form-control" id="inputAddress" placeholder="physics / chemistry...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tag 3</label>
                                <input type="text" name="tag3"  class="form-control" id="inputAddress" placeholder="physics / chemistry...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tag 4</label>
                                <input type="text" name="tag4"  class="form-control" id="inputAddress" placeholder="physics / chemistry...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Tag 5</label>
                                <input type="text" name="tag5"  class="form-control" id="inputAddress" placeholder="physics / chemistry...">
                            </div>
                            
                            <h5>Cover</h5>
                                <div class="custom-file">
                                    <input type="file" name="cover" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>                        

                @endcan
                
            </div>
        </div>
    </div>
</div>
@endsection
