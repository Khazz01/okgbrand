<section id="header">
    <nav class="navbar okg-nav sticky navbar-expand-lg navbar-light bg-light">
      <img style="margin-left: 3%"class="img-sidebar nav-image" width="15%"  src="{{asset('frontend/img/brandlogo.jpg')}}" alt="profle picture" width="200" height="85"/>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ">
          <li class="nav-item"><a class="nav-link active" href="{{route('/')}}">Home</a></li>
                                    <li class="nav-item  dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Services
                                        </a>
                                         <ul class="service-drop dropdown-menu">
                                           <li><a href="{{ route('/') }}#rate" class="dropdown-item"> Digital Store Promotion</a></li>
                                           <li><a href="{{ route('/') }}#rate" class="dropdown-item">Digital Marketing</a></li>
                                        

                                             <li><a href="{{ route('/') }}#email" class="dropdown-item">Email List Generation</a></li>
                                             <li><a href="{{ route('/') }}#email" class="dropdown-item">Email Lead Generation</a></li>
                                             <li><a href="{{ route('/') }}#webdev" class="dropdown-item"> Website Development</a></li>
                                          <li><a href="{{ route('/') }}#videdit" class="dropdown-item"> Video Editing</a></li>
                                          <li><a href="{{ route('/') }}#videdit" class="dropdown-item">Graphics Designs</a></li>
                                          <li><a href="{{ route('/') }}#start" class="dropdown-item">Write E-book</a></li>
                                          <li><a href="{{ route('/') }}#start" class="dropdown-item">Desktop Publishing</a></li>
                                          <li><a href="{{ route('/') }}#start" class="dropdown-item">E-learning and Certification</a></li>
                                         </ul>
                                     </li>
                                     <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                           Pages
                                         </a>
                                          <ul class="dropdown-menu service-drop">
                                              <li><a href="{{route('about')}}" a class="dropdown-item" >About Us</a></li>
                                              <li><a href="{{route('faq')}}" a class="dropdown-item" >FAQ</a></li>
                                              <li><a href="{{route('become.staff')}}" a class="dropdown-item" >Become a Staff</a></li>
                                           <li><a href="{{route('TNC')}}" a class="dropdown-item" >Terms and Condition</a></li>
                                           <li><a href="{{route('privacy.policy')}}" a class="dropdown-item" >Privacy Policy</a></li>
                                          </ul>
                                      </li>
          <li class="nav-item"><a class="nav-link" href="#footer">Contact</a></li>
          </ul>
          <div class="sign-up ms-auto">
            
            @auth

            <a class="sign-in auth" href="{{route('dashboard')}}">Dashboard</a>
            <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary auth">Log out</button></a>

            @else
            
            <a class="sign-in auth" href="{{route('login')}}">Login</a>
            <a href="{{route('become.staff')}}"><button type="button" class="btn btn-outline-primary auth">Sign up</button></a>

            @endauth

          </div>
      </div>
    </nav>
  </section>
