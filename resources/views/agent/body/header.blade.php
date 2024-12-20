
<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <div class="input-group-text">
          <i data-feather="search"></i>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
    <ul class="navbar-nav">
     @php
        $user_id = Illuminate\Support\Facades\Auth::user()->id;
        $messages = App\Models\AgentMessages::where('agency_id', $user_id)->orderBy('id', 'DESC')->limit(5)->get();
     @endphp
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i data-feather="mail"></i>
        </a>
        
        <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
          <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
          </div>
          <div class="p-1">

            @forelse ( $messages as $item )
              
            

            <a href="{{ route('view.message',$item->id) }}" class="dropdown-item d-flex align-items-center py-2">
              <div class="me-3">
                <img class="wd-30 ht-30 rounded-circle" src="{{asset('frontend/assets/images/user/avater.png')}}" alt="userr">
              </div>
              <div class="d-flex justify-content-between flex-grow-1">
                <div class="me-4">
                  <p>{{ $item->frist_name }} {{ $item->last_name }}</p>
                  <p class="tx-12 text-muted">{{ $item->email }}</p>
                </div>
                <p class="tx-12 text-muted"> {{$item->created_at->diffForHumans() }}</p>
              </div>	
            </a>
             @empty
             <p>No Message Found</p>
            @endforelse
          
          </div>
          <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
            <a href="{{ route('all.agency.message') }}">View all</a>
          </div>
        </div>
      </li>
      @php
        $id = Auth::user()->id;
        $user = App\Models\User::find($id);

      @endphp
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="wd-30 ht-30 rounded-circle" src="{{ (!empty($user->photo))?url('upload/agent_photo/'.$user->photo):url('upload/no_image.jpg') }}" alt="profile">
        </a>
        <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
          <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
            <div class="mb-3">
              <img class="wd-80 ht-80 rounded-circle" src="{{ (!empty($user->photo))?url('upload/agent_photo/'.$user->photo):url('upload/no_image.jpg') }}" alt="">
            </div>
            <div class="text-center">
              <p class="tx-16 fw-bolder">{{ $user->name }}</p>
              <p class="tx-12 text-muted">{{ $user->email }}</p>
            </div>
          </div>
          <ul class="list-unstyled p-1">
            <li class="dropdown-item py-2">
              <a href="{{route('agent.profile')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="user"></i>
                <span>Profile</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="{{route('edit.agent.profile')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="edit"></i>
                <span>Edit Profile</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="{{route('change.agent.password')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="repeat"></i>
                <span>Change password</span>
              </a>
            </li>
            <li class="dropdown-item py-2">
              <a href="{{route('agent.logout')}}" class="text-body ms-0">
                <i class="me-2 icon-md" data-feather="log-out"></i>
                <span>Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>