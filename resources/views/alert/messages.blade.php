

@if ($errors->any())
    @foreach ($errors->all() as $error)
               <div class="alert alert-danger alert-dismissible">
                   <strong>Error..!..</strong>{{$error}}
                   <button type="button" class="close " data-dismiss="alert">&times;</button>
               </div>
            @endforeach
        @endif








@if (session('error'))
    @foreach ($errors->all() as $error)
               <div class="alert alert-danger alert-dismissible">
                   <strong>Error..!..</strong>{{$error}}
                   <button type="button" class="close " data-dismiss="alert">&times;</button>
               </div>
            @endforeach
        @endif







  @if (session('success'))
   @foreach ($errors->all() as $error)
               <div class="alert alert-success alert-dismissible">
                   <strong>Error..!..</strong>{{session('success')}}
                   <button type="button" class="close " data-dismiss="alert">&times;</button>
               </div>
            @endforeach
       @endif