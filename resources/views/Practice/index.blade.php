@extends('layouts.master')

@section('content')

<title>Practice today</title>

<link href="/css/cover.css" rel="stylesheet" type="text/css">


  <body>

@include('Static.offscreenmenu')

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

                <h1 class="colorBlack">Practice Today:</h1>
                <h3> {{ $today }}</h3>


                <p>Pre-meet practice @Kalaheo: 3:30 - 4:30PM</p>

                <b>NOTICE:</b> <p>TEAM PICTURE Today 5PM!!!!</p>

                <p><b>Mid/Long Distance:</b>Pre-Meet, 10-15 minutes easy; 6x50 meter striders; Stretch. After practice: Foam Roll & Ice.</p>


                <p><b>Sprinters/Jumpers:</b> Warm up. Stretch. Striders. Hurdles. </p>




          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop