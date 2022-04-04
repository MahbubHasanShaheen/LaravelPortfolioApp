
 @extends('layouts.admin_layout')

  @section('content')
      <div class="col-md-10">
           <div class="sidebar_right">
             
                <div class="row">
                   <div class="col-md-3">
                     <img style="height:100; width: 140px" src="{{url($main->bg_img)}}" class="img-thambnail">
                     <h6>Background Images</h6>
                   </div>

    <form method="POST" action="{{ route('main.update') }}" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT') }}
       <div class="form-group">
        <label for="">Images</label>
        <input type="file" class="form-control" id="bg_img" name="bg_img">
       </div>


      <div class="form-group">
        <label for="">Title Name</label>
        <input type="text" class="form-control" name="title" value="{{ $main->title }}">
       </div>

     <label for="">Title Name</label>
        <input type="text" class="form-control" name="sub_title" value="{{ $main->sub_title }}">
       </div>

      <div class="form-group">
        <label for="">Resume</label>
        <input type="file" class="form-control" name="" >
      </div>

  
     
      <button type="submit" class="btn btn-primary" value="save">Submit</button>
    </form>
                
           </div>
         </div>
  @endsection
