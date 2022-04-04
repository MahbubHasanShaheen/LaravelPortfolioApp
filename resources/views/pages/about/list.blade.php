 @extends('layouts.admin_layout')

  @section('content')
<div class="container">
    <div class="row">
        <div class="service_list">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Sub_title</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if(count($about) > 0)
                       @foreach($about as $abouts) 
                     <tr>
                        <td>{{ $abouts->id }}</td>
                        <td>{{ $abouts->title }}</td>
                        <td>{{ $abouts->sub_title }}</td>
                         <td>{{ Str::limit(strip_tags($abouts->description), $limit = 10) }}</td>
                        <td>
                            <img src="{{ url($abouts->image) }}">
                        </td>
                   
                    
                       
                        <td style="width:150px">
                            
                            <div class="row">
                                <div class="col-md-6">
                                <a href="{{route('abouts.edit', $abouts->id)}}" class="btn btn-success m-2">Edit</a>
                                 </div>
                                  
                                 <div class="col-md-6">
                               <form action="{{route('abouts.destroy', $abouts->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                            </form>
                          </div>
                          </div>
                            
                        </td>
                      </tr>
                       @endforeach
                    
                   @endif
                 
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection