<style>
  
.reply input {
    margin: 0 0 20px;
}
input.form-control, textarea.form-control {
    border: solid 1px #CCC;
    background: #fff !important;
    box-shadow: none !important;
}
.form-control {
    height: 44px;
}

.reply textarea {
    min-width: 97.5%;
    min-height: 172px;
    margin: 0 0 18px;
}
input.form-control, textarea.form-control {
    border: solid 1px #CCC;
    background: #fff !important;
    box-shadow: none !important;
}


.btn:focus, .btn-2, ul.why li:before, .progress .progress-bar, .accordionMod .panel-heading .current, #current:after, .flat .plan li.plan-name, .flat .plan.featured:hover li.plan-name, #filters ul li a:hover h5, #filters ul li a.active h5, .cl-effect-21 a::before, .cl-effect-21 a::after, .cl-effect-21 .active a::before, .cl-effect-21 .active a::after, .post-date a.date i, .service-icon i {
    background: #2eaef0;
}

.btn {
    border: none;
    font-family: inherit;
    font-size: inherit;
    cursor: pointer;
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    z-index: 101;
}

input:hover, textarea:hover, input:focus, textarea:focus {
    border-color: #C9C9C9;
}
div.contact-form{
  margin:60px 0;
}
</style>
    <div class="container contents">
      <div class="row">
        <section class="contactForm">
<link rel="stylesheet" href="{{  asset('css/contact.css') }}" />

<div class="contact-form" id="miro_contact_form">
                        <div class="container">
                              <!-- Title row -->
                              <div class="row">


                                          <div class="col-md-12 big-title wow bounceIn animated paintingsShow" style="visibility: visible;">
                                                <h2>Contact Me</h2>
                                          </div>

                                    <div class="clearfix"></div>


@if(Session::has('message'))
    
    <div class="col-lg-12">
      <div class="alert alert-info">
        {{Session::get('message')}}
      </div>
    </div>

@else

                                    <div class="col-md-12 sub-title text-center wow slideInRight animated" style="visibility: visible;">
                                          <h3>Use this form to contact me or click on a Social Media Icon.</h3>
                                    </div>
                              </div>
                              <!-- /Title row -->

<!-- Form element row -->
<div class="row text-center">




<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<div class="col-md-2"></div>

<div class="col-md-8">
{!! Form::open(array('route' => 'contact_store', 'class' => 'form reply', 'id'=> 'contact')) !!}
<fieldset>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft animated" style="visibility: visible;">
<div class="row">
<div class="col-md-12">

    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name',
              'id' => 'name')) !!}
</div>
<div class="col-md-12">

    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address',
              'id' => 'email')) !!}

</div>
<!--
<div class="col-md-12">
    <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject" value="" required="">
</div>
-->
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInRight animated" style="visibility: visible;">
<div class="row">
<div class="col-md-12">

        {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message',
              'rows' => '3',
              'cols' => '40')) !!}

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
<button type="submit" class="btn btn-2 btn-2c">Send</button>

      
<div class="success alert-success alert" style="display:none">Your message has been sent successfully.</div>
<div class="error alert-danger alert" style="display:none">E-mail must be valid and message must be longer than 100 characters.</div>
                                                            </div>
                                                      </div>
                                                </fieldset>
                                          {!! Form::close() !!}
                                    </div>

                                    <div class="col-md-2"></div>
                              </div>
                              <!-- /Form element row -->
                        </div>
                  </div>

        </section>
      </div>
@endif

    </div>