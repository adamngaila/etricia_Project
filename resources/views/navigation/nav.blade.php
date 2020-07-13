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
            <a href="./surveilance">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Surveilance</p>
            </a>
          </li>
          
          <li>
            <a href="./map">
              <i class="now-ui-icons location_map-big"></i>
              <p>GPS tracker</p>
            </a>
          </li>
          <li>
            <a href="./etricia">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Etricia</p>
            </a>
          </li>
        
         
          <li class="active-pro">
            <a href="/">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>