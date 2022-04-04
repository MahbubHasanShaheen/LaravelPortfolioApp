



 @extends('layouts.admin_layout')

  @section('content')
      <div class="col-md-10">
           <div class="sidebar_right">
             
                <div class="row">
                
<h2>Edit Data Services</h2>
<hr>
    <form method="POST" action="{{route('portfolios.update', $portfolios->id)}} " enctype="multipart/form-data">
          @csrf
         

        <div class="form-group">
           <img src="{{ url($portfolios->small_img) }}">
        <label for="icon">Big Image</label>
        <input type="file" class="form-control" name="big_img"  value="{{ $portfolios->big_img }}">
       </div>


         <div class="form-group">
          <img src="{{ url($portfolios->small_img) }}">
        <label for="icon">Small Image</label>
        <input type="file" class="form-control" name="small_img"  value="{{ $portfolios->small_img }}">
       </div>


      <div class="form-group">
        <label for="icon">Title</label>
        <input type="text" class="form-control" name="title"  value="{{ $portfolios->title }}">
       </div>


       <div class="form-group">
        <label for="">Sub Title</label>
        <input type="text" class="form-control" name="sub_title"  value="{{ $portfolios->sub_title }}">
       </div>

  

      <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" class="form-control" name="description" id="description">{{ $portfolios->description }}</textarea>
       </div>



      <div class="form-group">
        <label for="icon">Client</label>
        <input type="text" class="form-control" name="client"  value="{{ $portfolios->client }}">
       </div>


        <div class="form-group">
        <label for="icon">Category</label>
        <input type="text" class="form-control" name="category"  value="{{ $portfolios->category }}">
       </div>








       <br>


     
      <button type="submit" class="btn btn-primary" value="save">Update</button>
    </form>
                
           </div>
         </div>
  @endsection
