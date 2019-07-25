@extends('backend.layouts.default')
@section('admin_content')


<section id="dom">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title">All Category</h4>
          <p class="card-text"></p>
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">

            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <table class="table table-striped table-bordered dom-jQuery-events">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($allcategory as $category)
                <tr>
                  <td>{{$category['id']}}</td>
                  <td>{{$category['category_name']}}</td>
                  <td>
                      
                    <form action="{{action('CategoryController@destroy', $category['id'])}}" method="post">
                    {{csrf_field()}}
                 
                  
                    <input type="hidden" name="_method" value="DELETE">
                   <a class="btn btn-success" href="{{Route('category.edit', $category['id'])}}">Edit</a> |
                   <input type="submit" class="btn btn-danger" value="Delete">
                   
                  </form>

                    
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
</section>
@endsection