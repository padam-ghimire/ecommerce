<div class="header">
    <div class="header-top">
        <div class="row">
            <div class="col col-lg-2 col-md-2 col-xs-12 col-sm-3">
                <a href="" class="logo">
                    <h1 class="no-margin">Kirana Pasal</h1>
                </a>
            </div>
      
            <div class="col col-lg-10 col-md-10 col-xs-12 col-sm-9">
                <form action="" method="post" class="msf">
                    <div class="form-section section-left">
                        <select name="" id="" class="form-control control-select">
                            <option value="">All Categories</option>
                            <option value="">Desktop</option>
                            <option value="">Laptops</option>
                        </select>
                        <a href="#" class="c-selector form-control"><span class="selector-face">All Categories</span><i class="fa fa-caret-down"></i></a>
                    </div>
                    
                        <div class="form-section section-mid">
                            <input type="text" name="query" class="form-control control-text" placeholder="Search">
                        </div>
                        <div class="form-section control-right">
                            <input type="submit" class="form-control control-submit" value="Search">
                        </div>
                       
                </form>
                <div class="header-mid">
        <div class="row">
            <div class="col col-offset-lg-2 col-offset-md-8 col-lg-6 col-md-6 col-xs-12 col-sm-8">
                <ul class="header-nav">
                    
                    
                    <li class="relative"><a href="#" class="categories-toggle">Categories <i class="fa fa-caret-down"></i></a>
                 
                    <div class="a-list">
                        <a href="#" class="list-item">Electronic</a>
                        <a href="3" class="list-item">Desktop</a>
                        <a href="#" class="list-item">Laptops</a>
                        <a href="#" class="list-item">Watches</a>
                        <a href="#" class="list-item">Phones</a>
                     </div>
                     </li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Track order</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </div>
            <div class="col col-lg-4 col-md-4 col-xs-12 col-sm-4">
                <ul class="header-nav multi-line-header-nav">
                    <li>
                        <a href="">
                            <span class="header-nav-line header-nav-line-1">Welcome, {{Auth::check() ? Auth()->user()->name : 'sign in'}}</span>
                            <span class="header-nav-line header-nav-line-2">Account & Lists <i class="fa fa-caret-down"></i></span>
                        </a>
                    <div class="a-list">
                        <a href="{{route('account')}}" class="list-item">Account</a>
                        <a class="list-item">Wish List</a>

                        @if(Auth::check())
                            <a href="{{route('logout')}}" onclick='event.preventDefault;this.querySelector("form.logout-form").submit()' class="list-item">Logout</a>
                            <form action="{{route('logout')}}"  method="post" class="logout-form">
                                @csrf
                                    <input type="submit" class="hide">
                            </form>

                        @else
                            <a href="{{route('login')}}" class="list-item">Login</a>
                            <a href="{{route('register')}}" class="list-item">Register</a>
                        @endif
                    </div>

                    </li>
                    <li>
                        <a href="#" class="header-nav-bold">Orders</a>
                    </li>
                    <li class="relative">
                        <a href="" class="header-shop">
                            <img  class="img-fluid" src="{{asset('images/app/cart.png')}}" alt="" srcset="">
                            <span class="items-count">10</span>
                        </a>
                    </li>
                    <li class="relative">
                        <a href="" class="header-shop">
                            <img src="{{asset('images/app/wish.png')}}" alt="" srcset="">
                            <span class="items-count">1</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
            </div>
            
        </div>
        
    </div>
   
</div>
