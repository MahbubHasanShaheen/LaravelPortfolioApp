<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="{{ asset('js/app.js') }}" defer></script>
    <title>My protfolio</title>




  <style type="text/css">
    
       .sidebar_left{
        min-height: 500px;
        background-color: #2e2e2e;
        margin: 0;
        padding: 5px;
       }

        .sidebar_right{
        min-height: 500px;
        background-color: #f5f5f5;
        margin: 0;
        padding: 5px;
       }

       footer{
        min-height: 100px;
        background-color: #2e2e2e;
        
       }

       footer h3{
        padding-top: 40px;
        font-size: 18px;
        color: white;
        text-align: center;
       }
  .menu li{
        list-style-type: square;
     
        padding: 8px;
       }

       .menu li a{
        display: block;
        text-decoration: none;
        color: white;


      }

     .menu li a:hover{
        color: gold;
        padding-left: 15px;
        font-weight: bold;
      }

  </style>


  </head>
  <body>

   <div class="dashboard">
     <div class="container-fluid" style="width: 100%; margin: 0 auto;">
     <div class="row">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="">My Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="float: right;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin Bar
          </a>
 
        </li>

        <li class="nav-item" style="float:right">
         
        </li>
      </ul>







               <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a><uL>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </uL>
                            </li>
                        @endguest
                    </ul>
    </div>
  </div>
</nav>
</div>

 <div class="row">
         <div class="col-md-3">
           <div class="sidebar_left">
               <ul class="menu" style="color:silver;margin-top: 25px;">
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('main')}}">Main</a></li>
                <li><a href="">Services</a>

                <a style="border-bottom: 1px solid silver;color:aqua;margin-left: 20px" href="{{route('services.create')}}">Create Service</a>
               
                <a style="border-bottom: 1px solid silver;color: aqua;margin-left: 20px"  href="{{route('services.list')}}">Service List</a>

                </li>
                 
                  
               
                <li><a href="">Portfolio</a>

                <a style="color:green;margin-left: 20px" href="{{route('portfolios.create')}}">Create Portfolio</a>
               
                <a style="color: green;margin-left: 20px"  href="{{route('portfolios.list')}}">Portfolio List</a>

                </li>


                <li><a href="">About Us</a>


                <a style="color:green;margin-left: 20px" href="{{route('abouts.create')}}">Create About</a>
               
                <a style="color: green;margin-left: 20px"  href="{{route('abouts.list')}}">About List</a>



                </li>

                <li><a href="">Contact</a></li>
                
              </ul>
           </div>


         </div>

  <div class="col-md-9">
    <!--main---->
 @include('alert.messages')
 @yield('content')
 
</div>






  </div>


</div>
</div>



  



       <footer>
          <h3>copyright@protfolio2021</h3>
       </footer>
   
   







   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>