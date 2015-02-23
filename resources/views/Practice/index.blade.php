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

                <p>Regularly scheduled practice today at Kalaheo: 3:30 - 5:30. <p><b>Mid/Long Distance:</b>35-45 minutes (maintence run) + 6x100 striders, stretch, and core work</p><p><b>Sprinters: </b>Speed Work - 100/200  8x60, 200/400 4x150. Weight room - be sure to bring your journal.</p>Reminders: First OIA track meet this Saturday @Castle High School. There will be no transportation - we will meet in the stands at Castle at 12:30PM. Student athletes that have paid the team fee will receive their uniforms at the end of practice today.</p>







          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop