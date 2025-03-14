<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-white" id="layout-navbar">
    <div class="container-fluid">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
              <i class="bx bx-search-alt bx-sm"></i>
              <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        

        <ul class="navbar-nav flex-row align-items-center ms-auto">
          @auth
   
          <!-- Language -->
            {{-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item selected" href="javascript:void(0);" data-language="en">
                    <i class="fi fi-us fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">English</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                    <i class="fi fi-fr fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">French</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                    <i class="fi fi-de fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">German</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                    <i class="fi fi-pt fis rounded-circle fs-4 me-1"></i>
                    <span class="align-middle">Portuguese</span>
                  </a>
                </li>
              </ul>
            </li> --}}
        
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <i class="bx bx-grid-alt bx-sm"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0">
                <div class="dropdown-menu-header border-bottom">
                  <div class="dropdown-header d-flex align-items-center py-3">
                    <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                    <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Add shortcuts" data-bs-original-title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                  </div>
                </div>
                <div class="dropdown-shortcuts-list scrollable-container ps">
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-calendar fs-4"></i>
                      </span>
                      <a href="app-calendar.html" class="stretched-link">Calendar</a>
                      <small class="text-muted mb-0">Appointments</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-food-menu fs-4"></i>
                      </span>
                      <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                      <small class="text-muted mb-0">Manage Accounts</small>
                    </div>
                  </div>
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-user fs-4"></i>
                      </span>
                      <a href="app-user-list.html" class="stretched-link">User App</a>
                      <small class="text-muted mb-0">Manage Users</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-check-shield fs-4"></i>
                      </span>
                      <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                      <small class="text-muted mb-0">Permission</small>
                    </div>
                  </div>
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                      </span>
                      <a href="index.html" class="stretched-link">Dashboard</a>
                      <small class="text-muted mb-0">User Profile</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-cog fs-4"></i>
                      </span>
                      <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                      <small class="text-muted mb-0">Account Settings</small>
                    </div>
                  </div>
                  <div class="row row-bordered overflow-visible g-0">
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-help-circle fs-4"></i>
                      </span>
                      <a href="pages-help-center-landing.html" class="stretched-link">Help Center</a>
                      <small class="text-muted mb-0">FAQs &amp; Articles</small>
                    </div>
                    <div class="dropdown-shortcuts-item col">
                      <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                        <i class="bx bx-window-open fs-4"></i>
                      </span>
                      <a href="modal-examples.html" class="stretched-link">Modals</a>
                      <small class="text-muted mb-0">Useful Popups</small>
                    </div>
                  </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </li>
            <!-- Quick links -->

            <!-- Notification -->
            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
              <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <i class="bx bx-bell bx-sm"></i>
                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end py-0">
                <li class="dropdown-menu-header border-bottom">
                  <div class="dropdown-header d-flex align-items-center py-3">
                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark all as read" data-bs-original-title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                  </div>
                </li>
                <li class="dropdown-notifications-list scrollable-container ps">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action dropdown-notifications-item">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar">
                            <img src="../../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                          <p class="mb-0">Won the monthly best seller gold badge</p>
                          <small class="text-muted">1h ago</small>
                        </div>
                        <div class="flex-shrink-0 dropdown-notifications-actions">
                          <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                          <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 314px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></li>
                <li class="dropdown-menu-footer border-top">
                  <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                    View all notifications
                  </a>
                </li>
              </ul>
            </li>
          <!--/ Notification -->
         
          @endauth
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                @auth
                  <div class="avatar avatar-online">
                    <img src="{{ asset('imgs/users/'.Auth::user()->avatar) }}" alt="" class="rounded-circle">
                  </div>

                @else
                  <div class="avatar">
                  <i class='bx bxs-user-circle' style="font-size: 42px;"></i>
                  </div>
                @endauth
            </a>
            @auth
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                          <img src="{{ asset('imgs/users/'.Auth::user()->avatar) }}" alt="" class="rounded-circle">
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block lh-1">{{ auth()->user()->name }}</span>
                        <small>{{ auth()->user()->job }}</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="">
                    <i class="bx bx-user me-2"></i>
                    <span class="align-middle">My Profile</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="">
                    <i class="bx bx-cog me-2"></i>
                    <span class="align-middle">Settings</span>
                  </a>
                </li>
                {{-- <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="pages-help-center-landing.html">
                    <i class="bx bx-support me-2"></i>
                    <span class="align-middle">Help</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages-faq.html">
                    <i class="bx bx-help-circle me-2"></i>
                    <span class="align-middle">FAQ</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages-pricing.html">
                    <i class="bx bx-dollar me-2"></i>
                    <span class="align-middle">Pricing</span>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li> --}}
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <form action="" method="post">
                    @csrf
                    <button class="dropdown-item">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </button>
                  </form>
                  
                </li>
              </ul>
            @else
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="">
                  <i class='bx bx-log-in me-2'></i>
                  <span class="align-middle">Sign in</span>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href=""  target="_blank">
                  <i class='bx bxs-door-open me-2'></i>
                  <span class="align-middle">Sign up</span>
                </a>
              </li>
            </ul>
            @endauth
          
          </li>
          <!--/ User -->
          

        </ul>
      </div>

      
      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" class="form-control search-input container-fluid border-0 tt-input" placeholder="Search..." aria-label="Search..." autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;IBM Plex Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu navbar-search-suggestion ps" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-pages"></div><div class="tt-dataset tt-dataset-files"></div><div class="tt-dataset tt-dataset-members"></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div></span>
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>
      
      
    </div>
  </nav>
