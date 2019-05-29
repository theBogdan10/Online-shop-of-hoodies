
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a href="{{route('product.index')}}" class="navbar-brand"><img src="img/childhood2_white.png" style="max-height: 55px;max-width: 55px;"></a>
        <button class="navbar-toggler" type="button" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a href="{{route('product.shoppingCart')}}" class="nav-link light " style="margin-right:20px;color: white;"><i class="fas fa-shopping-cart"></i> Shopping cart  
                        <span class="badge badge-light" style="margin-left:5px;">{{ Session::has('cart') ? Session::get('cart')->totalQty: ''}}</span>
                    </a>
                </li>
                 <div class="dropdown show">
                  <a class="btn btn-dark  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="far fa-user"></i>
                    User management
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @if(Auth::check())
                        <a class="dropdown-item" href="{{route('user.profile')}}">User profile</a>
                        <hr class="mt-2 mb-2">
                        <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                    @else 
                        <a class="dropdown-item" href="{{route('user.signup')}}">SignUp</a>
                        <a class="dropdown-item" href="{{route('user.signin')}}">SignIn</a>
                    @endif  
                  </div>
                </div>
            </ul>
        </div>
    </div> 
    </nav>