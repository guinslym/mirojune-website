@extends('frontend.backend')

@section('body')


    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="/auth/login">
                 {!! csrf_field() !!}

                <span id="reauth-email" class="reauth-email"></span>
                <input type="email"  class="form-control" value=""  autofocus>

                <input type="password" name="password"  class="form-group" required="">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember"> Remember Me
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Submit</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->



@stop


