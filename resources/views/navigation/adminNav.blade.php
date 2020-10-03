
    <div class="logo">
        <a href="http://www.blackscience.herokuapp.com" class="simple-text logo-mini">
         BLS
        </a>
        <a href="http://www.blackscience.herokuapp.com" class="simple-text logo-normal">
        {{ Auth::user()->name }}
        </a>

      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
            <a href="{{route('admin_dashboard')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>dashboard</p>
            </a>
          </li>
          <li>
            <a href="./surveilance">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Customers</p>
            </a>
          </li>
          
          <li class="nav-item dropdown">
          <a class ="nav-link dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                  <i class="now-ui-icons location_world"></i>
                <p> Products</p>         
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{route('super_etricia')}}">Etricia</a>
                  <a class="dropdown-item" href="#">Surveilance</a>
                  <a class="dropdown-item" href="#">Iris tracker</a>
                </div>
              
          </li>
         
          
          <li>
            <a href="./forums">
              <i class="now-ui-icons business_globe"></i>
              <p>Forum</p>
            </a>
          </li>
        
         
        <li class="nav-item dropdown"> 
                                <a class ="nav-link dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <i class="now-ui-icons sport_user-run"></i>
                                  <p>
                                  Log out <span class="d-lg-none d-md-block"></span>
                                    </p>
                                </a>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </ul>
      </div>
    </div>
