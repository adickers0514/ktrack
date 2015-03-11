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


                <p>Regular practice @Kalaheo: 3:30 - 5:30/6:00PM</p>

                <b>NOTICE:</b> <p>TEAM PICTURE IN 2 DAYS!!!!! Please be sure to come to practice on Friday, and bring your uniform top.</p>

                <p><b>Mid/Long Distance:</b> RUN:
                                             30-45 mins. 6x100m striders. Stretch. “A” Lift Day
                                             After practice: Foam Roll & Ice.</p>


                <p><b>Sprinters/Jumpers:</b> Speed workout - All: 40m A-Run x 6, accelerations, striders, </p>
                <p>10 x 60m dash</p>

                <p>Lifting Day: Attacking the power train</p>
                <ul>
                    <li>Deadlifts - 5 x 5</li>
                    <li>Bulgarian Split Squat - 5 x 8</li>
                    <li>Single Leg Squats - 4 x 5 (each leg)</li>
                    <li>One arm rows - 4 x 5</li>
                </ul>

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop