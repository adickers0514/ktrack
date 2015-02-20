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

                <p>EVEN THOUGH IT'S RAINING: Regularly scheduled practice @Kalaheo - 3:30 - 5:30PM</p>
                <p>Workouts may be adjusted to accommodate the wet conditions</p>
                <p>Meet up by the lockers for announcements, and completion of team registration in the computer lab (15 mins)</p>
                <p><b>Sprint squad:</b> bring your journals, we are lifting this afternoon</p>
                <p><b>Mid/Distance:</b>Pre-Meet workout - run (10-15 mins and 6-8x 50meter striders)</p>
                <p><b>UH Sunrise Meet Participants:</b> Please alert Coach Fiana, or Coach Tony if you need a ride to UH. Meet starts at 8:30AM - those in need of a ride should meet at school at 8:00AM</p>






          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop