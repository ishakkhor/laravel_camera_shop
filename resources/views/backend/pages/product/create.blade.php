@extends('backend.layouts.default')
@section('admin_content')


 <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title" id="striped-row-layout-basic">Create Product</h4>
        </div>
        <div class="card-body">
          <div class="px-3">

             @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
            @endif
            
            <form action="{{action('ProductController@store')}}" method="post" class="form form-horizontal striped-rows form-bordered" enctype="multipart/form-data">

              {{csrf_field()}}

              <div class="form-body">
                <h4 class="form-section"><i class="ft-file-text"></i> Product Info</h4>
                <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput1">Product Name</label>
                  <div class="col-md-9">
                    <input type="text" id="projectinput1" class="form-control" placeholder="Product Name" name="product_name">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput7">Select Category</label>
                  <div class="col-md-9">
                    <select id="projectinput7" name="category_name" class="form-control">
                      <!-- <option value="0" selected="" disabled="">Budget</option> -->
                      <option value="" selected hidden>select one</option>
                      @foreach($allcategory as $category)
                      <option value="{{$category['id']}}">{{$category['category_name']}}</option>
                     @endforeach
                    </select>
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput7">Select Brand</label>
                  <div class="col-md-9">
                    <select id="projectinput7" name="brand_name" class="form-control">
                      <!-- <option value="0" selected="" disabled="">Budget</option> -->
                      <option value="" selected hidden>select one</option>
                      @foreach($allbrand as $brand)
                      <option value="{{$brand['id']}}">{{$brand['brand_name']}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>


                <div class="form-group row last">
                  <label class="col-md-3 label-control" for="projectinput9">Product Short Description</label>
                  <div class="col-md-9">
                    <textarea id="projectinput9" rows="5" class="form-control" name="product_short_description" placeholder="Product Short Description "></textarea>
                  </div>
                </div>


                 <div class="form-group row last">
                  <label class="col-md-3 label-control" for="projectinput9">Product Long Description</label>
                  <div class="col-md-9">
                    <textarea id="projectinput9" rows="5" class="form-control" name="product_long_description" placeholder="Product Long Description "></textarea>
                  </div>
                </div>
                

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput3">Price</label>
                  <div class="col-md-9">
                    <input type="text" id="projectinput3" class="form-control" placeholder="Product Price" name="product_price">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control">Product Image</label>
                  <div class="col-md-9">
                    <label id="projectinput8" class="file ">
                      <input type="file" id="file" name="product_image">
                      <span class="file-custom"></span>
                    </label>
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput3">Product Color</label>
                  <div class="col-md-9">
                    <input type="text" id="projectinput3" class="form-control" placeholder="Product Color" name="product_color">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput7">Publication Status</label>
                  <div class="col-md-9">
                    <select id="projectinput7" name="publication_status" class="form-control">
                      <!-- <option value="0" selected="" disabled="">Budget</option> -->
                      <option value="" selected hidden>select one</option>
                      <option value="1">published</option>
                      <option value="0">draft</option>
                     
                    </select>
                  </div>
                </div>

                

                
              </div>

              <div class="form-actions">
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

@endsection
