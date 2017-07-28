<!--
 _   _             _                
| \ | |           | |               
|  \| | __ ___   _| |__   __ _ _ __ 
| . ` |/ _` \ \ / / '_ \ / _` | '__|
| |\  | (_| |\ V /| |_) | (_| | |   
\_| \_/\__,_| \_/ |_.__/ \__,_|_|   
-->

<nav class="navbar navbar-default" style="margin-bottom: :0">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Mirö Jun</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::segment(1)=='' ? 'active' : '' }}"><a href="/">Home</a></li>
              <li class="{{ Route::currentRouteNamed('fontend-about') ? 'active' : '' }}"><a href="/about">About Me</a></li>

                      @if (Route::currentRouteNamed('fontend-paintings'))
                        <li class="dropdown active">
                      @elseif (Route::currentRouteNamed('fontend-pictures'))
                        <li class="dropdown active">
                      @elseif (Route::currentRouteNamed('videos'))
                        <li class="dropdown active">
                      @else
                      <li class="dropdown">
                      @endif
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Archive <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li class="{{ Route::currentRouteNamed('fontend-paintings') ? 'actived' : '' }}"><a href="/paintings">Paintings</a></li>
                          <li class="{{ Route::currentRouteNamed('fontend-pictures') ? 'actived' : '' }}"><a href="/pictures">Pictures</a></li>
                          <li class="{{ Route::currentRouteNamed('fontend-videos') ? 'actived' : '' }}"><a href="{{ URL::route('videos') }} ">Videos</a></li>
                        </ul>
                      </li>
                      <li class="{{ Route::currentRouteNamed('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>

                    </ul>
                    @if (Auth::check())
                    <ul class="nav navbar-nav navbar-right">
                      <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"><a href="/dashboard">
                      Admin Interface</a></li>
                      <li><a href="/auth/logout">
                       Logout</a></li>
                    </ul>
                    @else
                    @endif
                  </div>
                </div>
              </nav>