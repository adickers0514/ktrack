



@extends('layouts.master')

@section('content')

<title>Kalaheo Track 2015</title>

<link href="/css/cover.css" rel="stylesheet" type="text/css">


  <body>



 <div>




           <nav id="followBar-Container" class="follow-lighter">

               <div class="followBarDark">
                   <div class="main-logo">
                     <span class="lightHomePageLogo">Kalaheo Track & Field</span>
                   </div>
                    <div class="navigation-items blackText">
                        @include('Static.navigation-items')
                    </div>
               </div>

           </nav>



            </div>



  <div class="content_wrapper backgroundColorWhite">
    <div class="page_container">
          <div class="page_core page_content">

                <h1 class="colorBlack">Track & Field Registration</h1>








                {!! Form::open() !!}

                <div class="row">
                    <div class="col-md-12">

                         <p class="parentTypeLarge colorMediumGray">Your coaches want to keep you informed of changes to the schedule, news, training updates and other momentary alerts that will arise throughout the season. Student athletes, be sure to enter your correct grade. Parents, you are encouraged to sign-up as well - be sure to enter 'Parent / Guardian' for <b>registration type</b>:</p>

                        <h2 class="pushDown colorBlack">Registrant Info</h2>

                        <!--  First name Input -->
                        <div class="form-group ">
                                {!! Form::label('firstname', 'First name:', ['class' => 'sr-only']) !!}
                                {!! Form::text('firstname', null, ['class' => 'form-control input-lg', 'placeholder' => 'First name']) !!}
                        </div>

                        <!--  Last name Input -->
                        <div class="form-group">
                                {!! Form::label('lastname', 'last name:', ['class' => 'sr-only']) !!}
                                {!! Form::text('lastname', null, ['class' => 'form-control  input-lg', 'placeholder' => 'Last name']) !!}
                        </div>

                        <!--  grade Input -->
                        <div class="form-group">
                                {!! Form::label('grade', 'Grade:', ['class' => 'sr-only']) !!}
                                <p>Registration Type (Student / Parent):</p>
                                {!! Form::select('grade', ['9'=>'9th Grade - Freshman', '10'=>'10th Grade - Sophomore', '11'=>'11th Grade - Junior', '12'=>'12th Grade - Senior', 'P'=>'Parent / Guardian'], null, ['class' => 'form-control  input-lg']) !!}
                        </div>

                        <!--  BIRTH DATE Input -->
                        <div class="form-group">
                                {!! Form::label('birthdate', 'last name:', ['class' => 'sr-only']) !!}
                                {!! Form::text('birthdate', null, ['class' => 'form-control  input-lg', 'placeholder' => 'Birthdate (mm/dd/yyyy)']) !!}
                        </div>

                        <h2 class="pushDown colorBlack">Contact & Account Info</h2>
                        <p class="parentTypeLarge colorMediumGray">We'd like to keep you informed of meet changes, scores, or any other alerts that come along throughout the season. Providing an email and an SMS-enabled phone# will ensure we can keep you up to date:</p>

                        <!--  Email Input -->
                        <div class="form-group ">
                                {!! Form::label('email', 'Email address:', ['class' => 'sr-only']) !!}
                                {!! Form::text('email', null, ['class' => 'form-control  input-lg', 'placeholder' => 'Email address']) !!}
                        </div>
                        <!--  SMS/Phone confirm-->
                        <div class="form-group ">
                                {!! Form::label('phone', 'Phone number:', ['class' => 'sr-only']) !!}
                                {!! Form::text('phone', null, ['class' => 'form-control  input-lg', 'placeholder' => 'SMS-enabled phone #']) !!}
                        </div>


                        <p class="parentTypeLarge colorMediumGray pushDown">Select a password for this account, in case you need to return here and update your contact information:</p>
                        <!--  Email Input confirm-->
                        <div class="form-group">
                                {!! Form::label('password', 'Password:', ['class' => 'sr-only']) !!}
                                {!! Form::password('password', ['class' => 'form-control input-lg' , 'placeholder' => 'Password']) !!}
                        </div>
                        <!--  Email Input confirm-->
                        <div class="form-group">
                                {!! Form::label('password_confirm', 'Password confirmation:', ['class' => 'sr-only']) !!}
                                {!! Form::password('password_confirm',['class' => 'form-control input-lg' , 'placeholder' => 'Confirm your password']) !!}
                        </div>



                        <div class="form-group pushDown">
                                {!! Form::submit('Register student athlete', ['class' => 'btn btn-primary form-control  input-lg']) !!}

                        </div>







                    </div>
                </div>


                <!-- First name Form Input -->


                {!! Form::close() !!}



          </div>


          </div>
    </div>





  <script src="/js/followbar.js"></script>


  </body>