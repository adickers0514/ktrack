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


              <p>STATE CHAMPIONSHIP PREP: @Castle High School, 4PM-6PM</p>
              <br />
              <p>To keep practice efficient and focused, non-state competitors may join the workout, but extended horseplay, and unfocused participants will be booted from practice </p>
              <p>These are the final 2 weeks of practice. Let's keep it tight, and get focused people!</p>
              
              <br />
                            <br />
              <p><b>Mid/Long Distance:</b></p>

              <p>For the next two weeks, you will notice a steady decline in distance and intensity has shifted more on tune-up workouts with speed. Athletes will begin the taper process to peak at states and to be fully rested for the race at states. Many athletes struggle with doing much less at this point, and try to run the easy runs harder, or even do extra work on the weekends. Please encourage them to take the REST and prepare mentally for the state meet (the physical part is there)!!</p>

              <p>

              <b>NEXT TWO WEEKS:</b><br /></p>

              <p>Monday 5/4: Those who raced at OIA Finals (Percie & Avery), will be a shorter run (15-20 mins), core, striders. Rest of the crew 30-35 min. maintenance run with 6-8x100 m.striders and core.</p>

              <p>Tuesday 5/5- Track Workout: 1 mile warm up, active stretching, 4 strides (50 meters).</p>
              <p>Workout is: 1x600, 2x400, 2x200 2 min. recovery between each item. 2 lap cool down. Stretch. Foam Roll & Ice (at night)</p>

              <p>Wednesday 5/6: Maintenance Run- 20-30 minutes (beginning the taper). 8x100 meter strides. Stretch & Core.</p>

              <p>Thursday: 5/7- Track workout @ Castle- 1 mile warm up, active stretching & 4 strides.</p>
              <p>Workout: 8x200meters at 800 meter race pace w/full recovery 2 minutes. 2 lap cool down. Stretch.</p>

              <p>Friday:5/8:  20 minutes (easy run). 5x100 meter strides. Stretch. Foam Roll & Ice</p>

              <p>Saturday & Sunday (5/9-5/10) OFF (taper!- fresh legs for STATES!).</p>


              <p>Monday 5/11: 30 minutes w/strides</p>

              <p>Tuesday 5/12 : Last track workout @ Castle: 1 mile warm-up, active stretching, strides</p>
              <p>Workout: 1x400  1x300 1x200 (focus on fast yet controlled- "cruise") Boys: 62, 45, 28; Girls: 68, 50, 32. 1 mile cool down.</p>

              <p>Wednesday 5/13: 20-30 minutes 8x100 accelerated strides. Stretch. Foam Roll/Ice</p>

              <p>Thursday 5/14: Easy 10-15 minutes. Get on Castle track if possible- put on spikes, do starts, blocks, handoffs, and 6-8x100 meter strides. Stretch.</p>

              <p>Friday/Saturday 5/15-5/16: STATES IN MAUI!!</p>


              <br />
              <br />


              <p><b>4x100 Relay Team:</b> RELAY PASSING CLINIC (Arthur, Nate, Grant, Keoni, Julian (alt)</p>

              <br />
              <p>800m warm job. Extended Warm up. Speed drills.</p>

              <br />

              <p>Speed ladder (in field, @80%, in flats): 20yrds. R = walk back. 40yrds. R = walk back. 60yrds. R = walk back. 80yrds. R = walk back. Reverse. X 2</p>

              <p>2 x 200m in flats, under 30</p>

              <br />

              <p>High Quality Relay passes  @90% until coach is satisfied</p>
              <b>Dropped batons will be tolerated, but will result in team push-ups on demand (@15-20) - SO DON'T DROP THE BATON</b>


              <p><b>Horizontal Jumpers</b></p>

              <p>Pit work as needed</p>


              

              
          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop