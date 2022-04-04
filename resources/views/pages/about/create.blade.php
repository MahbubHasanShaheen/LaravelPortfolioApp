
 @extends('layouts.admin_layout')

  @section('content')
      <div class="col-md-10">
           <div class="sidebar_right">
             
                <div class="row">
                
<h2>Create Data About</h2>
<hr>
 
    <form method="POST" action="{{ route('abouts.store') }}" enctype="multipart/form-data">
          @csrf
         {{ method_field('PUT') }}
         
         <div class="row">
          <div class="col-md-6">

        <div class="form-group">
        <label for="">Images</label>
        <img style="height:100px;margin-bottom: 10px" src="{{asset('assets/img/image.jpg')}}" class="img-thambnail">
        <input type="file" class="form-control" name="image">
       </div>
     </div>
  </div>


       <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title">
       </div>

        <div class="form-group">
        <label for="">Sub Title</label>
        <input type="text" class="form-control" name="sub_title" >
       </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description"></textarea>
       </div>

       <br>


     
      <button type="submit" class="btn btn-primary" value="save">Submit</button>
    </form>
                
           </div>
         </div>
  @endsection
