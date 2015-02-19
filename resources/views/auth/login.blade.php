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

               </div>

           </nav>



            </div>



  <div class="content_wrapper backgroundColorWhite">
    <div class="page_container">
          <div class="page_core page_content">

                <h1 class="colorBlack">Login</h1>



					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


                    <div class="row">
                         <div class="col-md-12">

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">



                             <div class="form-group ">
                                    <div class="col-md-12">
                                    {!! Form::label('email', 'Email address:', ['class' => 'sr-only']) !!}
                                    {!! Form::text('email', null, ['class' => 'form-control  input-lg', 'placeholder' => 'Email address', 'value'=>old('email')]) !!}
                                    </div>
                             </div>

                             <div class="form-group">
                             <div class="col-md-12">
                                   {!! Form::label('password', 'Password:', ['class' => 'sr-only']) !!}
                                   {!! Form::password('password', ['class' => 'form-control input-lg' , 'placeholder' => 'Password']) !!}
                                   </div>
                             </div>



                        <div class="form-group">
                        							<div class="col-md-6">
                        								<div class="checkbox">
                        									<label>
                        										<input type="checkbox" name="remember"> Remember Me
                        									</label>
                        								</div>
                        							</div>
                        						</div>

                        						<div class="form-group">
                        							<div class="col-md-6">
                        								<button type="submit" class="btn btn-primary btn-block" style="margin-right: 15px;">
                        									Login
                        								</button>


                        							</div>
                        							<div class="col-md-6">
                                                        <a href="/password/email">Forgot Your Password?</a>
                                                    </div>
                        						</div>



					</form>
					                        </div>
					                        </div>


 </div>


          </div>
    </div>





  <script src="/js/followbar.js"></script>


  </body>

@endsection
