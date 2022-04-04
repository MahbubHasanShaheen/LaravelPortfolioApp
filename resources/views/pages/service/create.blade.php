
 @extends('layouts.admin_layout')

  @section('content')
      <div class="col-md-10">
           <div class="sidebar_right">
             
                <div class="row">
                
<h2>Create Data Services</h2>
<hr>
    <form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data">
          @csrf
         

      <div class="form-group">
        <label for="icon">Font Aowsome Icon</label>
        <input type="text" class="form-control" name="icon" id="icon">
       </div>


       <div class="form-group">
        <label for="">Title Name</label>
        <input type="text" class="form-control" name="title" id="title">
       </div>

  

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description"></textarea>
       </div><br>


     
      <button type="submit" class="btn btn-primary" value="save">Submit</button>
    </form>
                
           </div>
         </div>
  @endsection
