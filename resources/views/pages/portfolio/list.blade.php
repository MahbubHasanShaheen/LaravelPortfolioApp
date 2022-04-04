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
                        <th>Big Images</th>
                        <th>Small Images</th>
                        <th>Description</th>
                        <th>Client</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if(count($portfolio) > 0)
                       @foreach($portfolio as $portfolios) 
                     <tr>
                        <td>{{ $portfolios->id }}</td>
                        <td>{{ $portfolios->title }}</td>
                        <td>{{ $portfolios->sub_title }}</td>
                        <td>
                            <img src="{{ url($portfolios->big_img) }}">
                        </td>
                        <td>
                            <img src="{{ url($portfolios->big_img) }}">
                        </td>
                        <td>{{ Str::limit(strip_tags($portfolios->description), $limit = 10) }}</td>
                        <td>{{ $portfolios->client }}</td>
                        <td>{{ $portfolios->category }}</td>
                        <td style="width:150px">
                            
                            <div class="row">
                                <div class="col-md-6">
                                <a href="{{route('portfolios.edit', $portfolios->id)}}" class="btn btn-success m-2">Edit</a>
                                 </div>
                                  
                                 <div class="col-md-6">
                               <form action="{{route('portfolios.destroy', $portfolios->id)}}" method="post">
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