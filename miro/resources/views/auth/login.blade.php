@extends('frontend.backend')

@section('body')


    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>

            <form method="POST" action="/auth/login" class="form-group">
                 {!! csrf_field() !!}

                <span id="reauth-email" class="reauth-email"></span>
                <br>
                <label for="email" class="form-group">Email</label>
               <input type="email" name="email" value="{{ old('email') }}" class="form-group" placeholder="admin@gmail.com">

                <br>
                <label for="password" class="form-group">Password</label>
                 <input type="password" name="password" id="password" class="form-group" placeholder="mypassword">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember"> Remember Me
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Submit</button>
            </form><!-- /form -->
            <a href="/auth/register" class="btn btn-xs btn-warning btn-signin btn-block" style="padding:5px;">Register</a>
        </div><!-- /card-container -->
    </div><!-- /container -->



@stop
