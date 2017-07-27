
<style>
  .social-footer{
    margin: 20px 0;
    padding-top: 20px;
    border-top: 3px solid #eee8e2;
  }
  .social-footer a:hover{
    text-decoration: none;
    color:inherit;
  }
  .social-footer ul.social-buttons li a {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    font-size: 20px;
    line-height: 40px;
    outline: 0;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;

}
.social-footer ul.social-buttons li a i:hover{
    color: white;
    background-color: #222;
    border-radius: 100%;
    font-size: 20px;
    line-height: 40px;
    outline: 0;
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    transition: all .3s;
        display: block;
    width: 40px;
    height: 40px;
         -webkit-transition-duration: 500ms;
     transition-duration: 500ms;
}


</style>

<div class="col-md-12 text-center social-footer">
                    <ul class="list-inline social-buttons">
                        
@foreach($socials as $social)
                        <li class="social-button-item"><a href="{{ $social->url }}" target="_blank"><i class="{{ $social->icon }}"></i></a>
                        </li>
@endforeach
                       
                    </ul>
                </div>
