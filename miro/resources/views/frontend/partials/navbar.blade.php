<nav class="navbar navbar-default" style="margin-bottom: :0">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Miro June</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::segment(1)=='' ? 'active' : '' }}"><a href="/">Home</a></li>
              <li class="{{ Route::currentRouteNamed('fontend-about') ? 'active' : '' }}"><a href="/about">About Me</a></li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Archive <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li class="{{ Route::currentRouteNamed('fontend-paintings') ? 'actived' : '' }}"><a href="/paintings">Paintings</a></li>
                          <li class="{{ Route::currentRouteNamed('fontend-pictures') ? 'actived' : '' }}"><a href="/about">Pictures</a></li>
                          <li class="{{ Route::currentRouteNamed('fontend-videos') ? 'actived' : '' }}"><a href="/about">Videos</a></li>
                        </ul>
                      </li>
                      <li class="{{ Route::currentRouteNamed('fontend-contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}"><a href="/dashboard">
                      Admin Interface</a></li>
                      <li><a href="/auth/logout">
                       Logout</a></li>
                    </ul>
                  </div>
                </div>
              </nav>