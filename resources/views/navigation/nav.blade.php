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
            <a href="./profile">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profile</p>
            </a>
          </li>
    
          <li>
            <a href="./map">
              <i class="now-ui-icons location_map-big"></i>
              <p>Pack Control</p>
            </a>
          </li>
          <li>
            <a href="./etricia?code ={{ Auth::user()->serverip}}">
              <i class="now-ui-icons media-2_sound-wave"></i>
              <p>Monitor</p>
            </a>
          </li>
           </li>
          <li>
            <a href="./forums">
              <i class="now-ui-icons business_globe"></i>
              <p>Billing</p>
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
    

    @if( (Auth::user()->usertype) =="super")

    @endif