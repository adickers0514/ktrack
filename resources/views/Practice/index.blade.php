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

                <b>NOTICE:</b> <p>THIS Friday we are having the team picture taken. Please be sure to come to practice next Friday, 5PM, in your uniform top.</p>

                <p><b>Mid/Long Distance:</b> RUN: 30-45 mins. 6x100 striders. Stretch. "A" Lift day. After practice: Foam roll & Ice.</p>


                <p><b>Sprinters/Jumpers:</b> Speed workout - All: 5x20m A-Run + 20m Run, 3x30 standing starts.</p>
                <p>100/200:(clocked) 2x200, 2x150, 1x60 - 90% of PB. Rest: 4mins. 2mins. 2mins</p>
                <p>200/400:(clocked) 1x300, 1x200, 2x150, 3x60 90% of PB. Rest: 8mins. 6mins. 4mins. 2mins.</p>

                <p>Lifting Day - program change: TURNING UP THE VOLUME</p>
                <ul>
                    <li>Back squats - 5 x 5</li>
                    <li>Bench press - 4 x 5</li>
                    <li>Hang clean - 4 x 5</li>
                    <li>Box jumps - 10 x 3</li>
                </ul>

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop