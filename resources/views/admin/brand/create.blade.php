@extends('admin.layouts.default')
@section('admin_content')

<h1>Create Brand</h1>

<div class="row justify-content-md-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="bordered-layout-card-center">Create Brand</h4>
         
        </div>
        <div class="card-body">
          <div class="px-3">

            <form class="form form-horizontal form-bordered">
              <div class="form-body">
                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Full Name</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="name" name="fullname">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput2">Title</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput2" class="form-control" placeholder="title" name="title">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput3">Company</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput3" class="form-control" placeholder="company" name="company">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput4">Email</label>
                  <div class="col-md-9">
                    <input type="email" id="eventRegInput4" class="form-control" placeholder="email" name="email">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput5">Contact Number</label>
                  <div class="col-md-9">
                    <input type="number" id="eventRegInput5" class="form-control" name="contact" placeholder="contact number">
                  </div>
                </div>

                <div class="form-group row last">
                  <label class="col-md-3 label-control">Existing Customer</label>
                  <div class="col-md-9">
                    <div class="input-group col-md-9">
                      <div class="custom-control custom-radio d-inline-block ml-1">
                        <input type="radio" id="customRadioInline2" name="customRadioInline2" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Yes</label>
                      </div>
                      <div class="custom-control custom-radio d-inline-block ml-2">
                        <input type="radio" id="customRadioInline3" checked name="customRadioInline2" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-actions center">
                <button type="button" class="btn btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                <button type="button" class="btn btn-raised btn-primary">
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