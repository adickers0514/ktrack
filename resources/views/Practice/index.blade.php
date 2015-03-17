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


                <p>Spring break practice at Castle High School: 4:00-5:30PM</p>

                <p><b>Mid/Long Distance:</b> Early day workout </p>


                <p><b>Sprinters/Jumpers:</b> Warm up. Stretch. Speed Drills. </p>

                <p>Tempo Workout:

                 <ul>
                    <li>100m - @80%. 2mins rest (boys < 15.0, girls < 17.0)</li>
                    <li>200m - @80%. 3mins rest (boys < 30.0, girls < 32.0)</li>
                    <li>300m - @75%. 4mins rest (boys < 49.0, girls < 52.0 )</li>
                    <li>400m - @75%. 8mins rest (boys < 70.0, girls < 83.0)</li>
                    <li>300m - @75%. 4mins rest (boys < 49.0, girls < 52.0 )</li>
                    <li>200m - @80%. 3mins rest (boys < 30.0, girls < 32.0)</li>
                    <li>100m - @80%. (boys < 15.0, girls < 17.0)</li>
                 </ul>

                 <p>The Character Builder (after 15mins rest)</p>
                 <ul>
                     <li>150m - @85%. 4mins rest (@18.5 sec)</li>
                     <li>150m - @85%. 4mins rest (@18.5 sec)</li>
                     <li>150m - @85%. 4mins rest (@18.5 sec)</li>
                 </ul>






          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop