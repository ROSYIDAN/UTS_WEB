@extends('layout')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
          @if($errors->any())
          <div class="alert alert-danger">
            There's some error(s):
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>  
          </div>
          @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">
                      Add Portfolio
                    </h3>
                </div>

                <form method="post" action="{{ route('portofolios.store') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" 
                                placeholder="Enter title" name="title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" 
                                placeholder="Description" name="description">
                        </div>


                        <div class="mb-3">
                          <label for='image' class="form-label">Image</label>
                          <input type="file" class="form-control" name="image_file" id="image">
                      </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a href="{{ route('portofolios.index') }}" class="btn btn-danger ml-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection