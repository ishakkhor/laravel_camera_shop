@extends('backend.layouts.default')
@section('admin_content')

<section id="basic-form-layouts">
 
  

  <div class="row justify-content-md-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title" id="bordered-layout-card-center">Create Category</h4>
          
        </div>
        <div class="card-body">
          <div class="px-3">

            @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
            @endif

            <form action="{{action('CategoryController@store')}}" method="post" class="form form-horizontal form-bordered">
              {{csrf_field()}}
              <div class="form-body">
                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Category Name</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter category name" name="category_name">
                  </div>
                </div>

              </div>

              <div class="form-actions center">
                <button type="button" class="btn btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                <button type="submit" class="btn btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection