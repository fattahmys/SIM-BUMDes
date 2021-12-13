     <!-- top navigation -->
     <div class="top_nav">
        <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/build/images/user.png" alt="">Admin 
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('logout')}}"
              onclick="
              event.preventDefault();
              document.getElementById('formlogout').submit();"
              >
                <span class="dropdown-item" class="fa fa-sign-out pull-right" aria-hidden="true">Log out</span>
              </a>
              <form id="formlogout" method="post" action="{{route('logout')}}">@csrf</form>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->