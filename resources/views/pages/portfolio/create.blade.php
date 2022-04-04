
 @extends('layouts.admin_layout')

  @section('content')
      <div class="col-md-10">
           <div class="sidebar_right">
             
                <div class="row">
                
<h2>Create Data Portfolio</h2>
<hr>
 
    <form method="POST" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
          @csrf
         {{ method_field('PUT') }}
         
         <div class="row">
          <div class="col-md-6">

        <div class="form-group">
        <label for="">Big Images</label>
        <img style="height:100px;margin-bottom: 10px" src="{{asset('assets/img/big_img.jpg')}}" class="img-thambnail">
        <input type="file" class="form-control" name="big_img">
       </div>
     </div>

       <div class="col-md-6">
        <div class="form-group">
        <label for="">Small Images</label>
        <img style="height:70px;margin-top: 30px;margin-bottom: 10px" src="{{asset('assets/img/small_img.jpg')}}" class="img-thambnail">
        <input type="file" class="form-control"  name="small_img">
       </div>
     </div>
    </div>


       <div class="form-group">
        <label for="">Title Name</label>
        <input type="text" class="form-control" name="title">
       </div>

        <div class="form-group">
        <label for="">Sub Title Name</label>
        <input type="text" class="form-control" name="sub_title" >
       </div>

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description"></textarea>
       </div>


      <div class="form-group">
        <label for="">Client</label>
        <input type="text" class="form-control" name="client">
       </div>


       <div class="form-group">
        <label for="">Category</label>
        <input type="text" class="form-control" name="category">
       </div>

       <br>


     
      <button type="submit" class="btn btn-primary" value="save">Submit</button>
    </form>
                
           </div>
         </div>
  @endsection
