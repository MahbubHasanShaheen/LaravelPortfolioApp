



 @extends('layouts.admin_layout')

  @section('content')
      <div class="col-md-10">
           <div class="sidebar_right">
             
                <div class="row">
                
<h2>Edit Data Services</h2>
<hr>
    <form method="POST" action="{{route('abouts.update', $abouts->id)}} " enctype="multipart/form-data">
          @csrf
         

        <div class="form-group">
           <img src="{{ url($abouts->image) }}">
        <label for="icon">Big Image</label>
        <input type="file" class="form-control" name="image"  value="{{ $abouts->image }}">
       </div>




      <div class="form-group">
        <label for="icon">Title</label>
        <input type="text" class="form-control" name="title"  value="{{ $abouts->title }}">
       </div>


       <div class="form-group">
        <label for="">Sub Title</label>
        <input type="text" class="form-control" name="sub_title"  value="{{ $abouts->sub_title }}">
       </div>

  

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description">{{ $abouts->description }}</textarea>
       </div>

 
       <br>


     
      <button type="submit" class="btn btn-primary" value="save">Update</button>
    </form>
                
           </div>
         </div>
  @endsection
