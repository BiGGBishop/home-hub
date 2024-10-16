		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
            <div class="sidebar-header">
              <a href="#" class="sidebar-brand">
                Home<span>Hub</span>
              </a>
              <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="sidebar-body">
              <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                  <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item nav-category">Real Estate</li>
                @if (Auth::user()->can('menu.type'))
                  
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Property Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                      @if (Auth::user()->can('all.type'))
                      <li class="nav-item">
                        <a href="{{route('all.type')}}" class="nav-link">All Types</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.type'))
                      <li class="nav-item">
                        <a href="{{route('add.type')}}" class="nav-link">Add Type</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>
                @endif
                
                @if (Auth::user()->can('menu.amenities'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Amenities</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="amenities">
                    <ul class="nav sub-menu">
                      @if (Auth::user()->can('all.amenities'))
                      <li class="nav-item">
                        <a href="{{route('all.amenities')}}" class="nav-link">All Amenities</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.amenities'))
                      <li class="nav-item">
                        <a href="{{route('add.amenities')}}" class="nav-link">Add Amenities</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>
                @endif


                @if (Auth::user()->can('menu.building'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#building" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Buildings</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="building">
                    <ul class="nav sub-menu">
                      @if (Auth::user()->can('all.building'))
                      <li class="nav-item">
                        <a href="{{route('all.building')}}" class="nav-link">All Buildings</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.building'))
                      <li class="nav-item">
                        <a href="{{route('add.building')}}" class="nav-link">Add Buildings</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>
                @endif


                @if (Auth::user()->can('menu.place'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#place" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Places</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="place">
                    <ul class="nav sub-menu">
                      @if (Auth::user()->can('all.place'))
                      <li class="nav-item">
                        <a href="{{route('all.place')}}" class="nav-link">All Places</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.place'))
                      <li class="nav-item">
                        <a href="{{route('add.place')}}" class="nav-link">Add Places</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>
                @endif



                @if (Auth::user()->can('menu.pcategory'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#pcategory" role="button" aria-expanded="false" aria-controls="pcategory">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Property Category</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="pcategory">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.pcategory'))
                      <li class="nav-item">
                        <a href="{{ route('all.category') }}" class="nav-link">All Category</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.pcategory'))
                      <li class="nav-item">
                        <a href="{{route('add.category')}}" class="nav-link">Add Category</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif

                @if (Auth::user()->can('menu.property'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false" aria-controls="property">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Property</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="property">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.property'))
                      <li class="nav-item">
                        <a href="{{ route('all.property') }}" class="nav-link">All Property</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.property'))
                      <li class="nav-item">
                        <a href="{{route('add.property')}}" class="nav-link">Add Property</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif
                




                {{-- Components --}}

                <li class="nav-item nav-category">Components</li>
                @if (Auth::user()->can('menu.slider'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Slider</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.slider'))
                      <li class="nav-item">
                        <a href="{{ route('all.slider') }}" class="nav-link">All Slider</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.slider'))
                      <li class="nav-item">
                        <a href="{{ route('add.slider') }}" class="nav-link">Add Slider</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif



                @if (Auth::user()->can('menu.testimonial'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#testimonial" role="button" aria-expanded="false" aria-controls="testimonial">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Testimonial</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="testimonial">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.testimonial'))
                      <li class="nav-item">
                        <a href="{{ route('all.testimonial') }}" class="nav-link">All Testimonial</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.testimonial'))
                      <li class="nav-item">
                        <a href="{{route('add.testimonial')}}" class="nav-link">Add Testimonial</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif



                @if (Auth::user()->can('menu.slider'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#partner" role="button" aria-expanded="false" aria-controls="partner">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Partner</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="partner">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.slider'))
                      <li class="nav-item">
                        <a href="{{ route('all.partner') }}" class="nav-link">All Partner</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.slider'))
                      <li class="nav-item">
                        <a href="{{ route('add.partner') }}" class="nav-link">Add Partner</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif






                @if (Auth::user()->can('menu.slider'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#blogcategory" role="button" aria-expanded="false" aria-controls="blogcategory">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Blog Category</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="blogcategory">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.slider'))
                      <li class="nav-item">
                        <a href="{{ route('all.blog.category') }}" class="nav-link">All Blog Category</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.slider'))
                      <li class="nav-item">
                        <a href="{{ route('add.blog.category') }}" class="nav-link">Add Blog Category</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif




                @if (Auth::user()->can('menu.slider'))
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="blog">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Blog </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="blog">
                    <ul class="nav sub-menu">
                      
                      @if (Auth::user()->can('all.slider'))
                      <li class="nav-item">
                        <a href="{{ route('all.blog') }}" class="nav-link">All Blog</a>
                      </li>
                      @endif
                      @if (Auth::user()->can('add.slider'))
                      <li class="nav-item">
                        <a href="{{ route('add.blog') }}" class="nav-link">Add Blog</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </li>

                @endif




               
                {{-- Role And Permission --}}
                @if (Auth::user()->can('auth.permission'))
                <li class="nav-item nav-category">Role And Permission</li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#roles" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Auth permission</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="roles">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="{{route('all.permission')}}" class="nav-link">All Permission</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('all.roles')}}" class="nav-link">All Roles</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('add.role.permission')}}" class="nav-link">Roles & Permission</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('all.role.permission')}}" class="nav-link">All Roles & Permission</a>
                      </li>
                    </ul>
                  </div>
                </li>
                @endif

                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Manage admin users</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="admin">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="{{route('all.admin')}}" class="nav-link">All Admin</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('add.admin')}}" class="nav-link">Add Admin</a>
                      </li>
                    
                    </ul>
                  </div>
                </li>


                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#agent" role="button" aria-expanded="false" aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Manage agent users</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                  </a>
                  <div class="collapse" id="agent">
                    <ul class="nav sub-menu">
                      <li class="nav-item">
                        <a href="{{route('all.agent')}}" class="nav-link">All Agent</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('add.agent')}}" class="nav-link">Add Agent</a>
                      </li>
                    
                    </ul>
                  </div>
                </li>



                <li class="nav-item nav-category">Docs</li>
                <li class="nav-item">
                  <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          {{-- <nav class="settings-sidebar">
            <div class="sidebar-body">
              <a href="#" class="settings-sidebar-toggler">
                <i data-feather="settings"></i>
              </a>
              <div class="theme-wrapper">
                <h6 class="text-muted mb-2">Light Theme:</h6>
                <a class="theme-item" href="{{asset('backend/demo1/dashboard.html')}}">
                  <img src="{{asset('backend/assets/images/screenshots/light.jpg')}}" alt="light theme">
                </a>
                <h6 class="text-muted mb-2">Dark Theme:</h6>
                <a class="theme-item active" href="{{asset('backend/demo2/dashboard.html')}}">
                  <img src="{{asset('backend/assets/images/screenshots/dark.jpg')}}" alt="light theme">
                </a>
              </div>
            </div>
          </nav> --}}
              <!-- partial -->