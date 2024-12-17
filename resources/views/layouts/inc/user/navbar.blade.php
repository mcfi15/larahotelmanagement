



<nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
    <div class="collapse navbar-collapse justify-content-between">

    
      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="{{ url('/') }}">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center"><img src="{{ asset($appSetting->logo) }}" alt="Logo" width="100" />
              
            </div>
          </div>
        </a>
      </div>


      <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
          <span class="fas fa-search search-box-icon"></span>
        </form>
        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
        
      </div>
      <ul class="navbar-nav navbar-nav-icons flex-row">
        <li class="nav-item">
          <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        
        
        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">
              @if(Auth::user()->image == '')
              <img class="rounded-circle " src="{{ asset('uploads/profile/avatar.png') }}" alt="" />
              @else
              <img class="rounded-circle " src="{{ asset(Auth::user()->image) }}" alt="" />
              @endif
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">
                    @if(Auth::user()->image == '')
                    <img class="rounded-circle " src="{{ asset('uploads/profile/avatar.png') }}" alt="" />
                    @else
                    <img class="rounded-circle " src="{{ asset(Auth::user()->image) }}" alt="" />
                    @endif
                  </div>
                  <h6 class="mt-2 text-black" style="text-transform: capitalize;">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</h6>
                </div>
                
              </div>
              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  
                  <li class="nav-item"><a class="nav-link px-3" href="{{ url('/home') }}"><span class="me-2 text-900" data-feather="pie-chart"></span>Home</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="{{ url('/change-password') }}"><span class="me-2 text-900" data-feather="lock"></span>Change Password</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="{{ url('/settings') }}"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                  
                </ul>
              </div>
              <div class="card-footer p-0 border-top">
                
                <hr />
                <div class="px-3"> 
                    <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"> <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>







  
  <nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
    
  </nav>
  <nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
    
  </nav>
  <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew" style="display:none;">
    
  </nav>