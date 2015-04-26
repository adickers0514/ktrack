@extends('layouts.master')

@section('content')

<title>Kalaheo Track 2015</title>

<link href="/css/cover.css" rel="stylesheet" type="text/css">


  <body>

    @include('Static.offscreenmenu')



 <div>



   <nav id="followBar-Container" class="pageObject">
       <div class="followBarLight">
           <div class="main-logo">
             <span>Kalaheo Track & Field</span>
           </div>

            <div class="navigation-items whiteText">
                @include('Static.navigation-items')
            </div>




       </div>

       <div class="followBarDark hide">
           <div class="main-logo">
             <span class="lightHomePageLogo">Kalaheo Track & Field</span>
           </div>
            <div class="navigation-items blackText">
                @include('Static.navigation-items')
            </div>
       </div>

   </nav>



</div>

  <div class="main-screen" class="pageObject">

    <div id="logo"></div>
    <ul class="slideshow">




          <li class="image">
          <li class="image">
          <li class="image">
          <li class="image">
          <li class="image">
          <li class="image">
          <li class="image">


      <h1></h1></li>



      <!-- <li class="image"><h1><i>Psst!</i>...Scroll Down To Reveal Content</h1></li>
      <li class="image"><h1><i>Psst!</i>...Scroll Down To Reveal Content</h1></li> -->
    </ul>
  </div>

  <div class="content_wrapper backgroundColorWhite pageObject">
    <div class="page_container">
          <div class="page_core page_content">



<div class="colorDarkGray parentTypeLarge">

                      <h1>Results Published</h1>
                      <p>Lots of results published, so we should have all the meet data available for your review. See the <a href="/schedule">schedule & results</a> page for details.</p>

                      <hr />
                  </div>





                  <div class="colorDarkGray parentTypeLarge">

                      <h1>Qualifying Standards</h1>
                      <h3>OIA JV, Varsity and State Qualifying standard times for all events</h3>
                      <p><a href="/results/oia_state_standards_2015.pdf">Click here to view</a> the OIA (JV and Varsity), state qualifying standards, as of March 2015.</p>
                      <hr />
                  </div>





                  <div class="colorDarkGray parentTypeLarge">

            <h1>Meet Results </h1>
            <h3>Junior Varsity Eastern Division Championship from Kaiser High School</h3>
                <p><a href="/results/04042015_JV_easterns.pdf">Results report</a> from Kaiser, where the eastern division of the OIA descended for what was a pretty poorly run track meet! While it took quite a while to get through the meet with all the technical difficulties and errors, the Kalaheo JV team performed admirably in the face of strong competition. </p>
            <hr />
            </div>

            <div class="colorDarkGray parentTypeLarge">
            <h1>Rainy Results from Roosevelt</h1>
            <h3>3/28 Qualifying Meet at Roosevelt</h3>
                <p><a href="/results/03282015_Roosevelt_Results.pdf">Results report</a> from the rain, rain, lots of rain track meet at Roosevelt High School. This was the wettest meet I've ever endured as a coach and while the team performed, I know drier weather would have elicited better performances - and drier bottoms.</p>
            <hr />
            </div>


            <div class="colorDarkGray parentTypeLarge">
            <h1>Cal Track / Ruby Tuesday Results </h1>
            <h3>3/21 Invitational at Punahou</h3>
                <p><a href="/results/032115_cal_track_ruby_tuesday_results.pdf">Results report</a> from the Cal Track / Ruby Tuesday Invitational held on Punahou Schools campus. Lots of rain, but high spirits and tough battles were the order of the day.</p>
            <hr />
            </div>



            <div class="colorDarkGray parentTypeLarge">
            <h1>Meet Results </h1>
            <h3>3/14 Qualifying Meet at Castle</h3>
                <p><a href="/results/03142015_Castle_Results.pdf">Results report</a> from Castle track meet on 3/14, with Radford, Kahuku, Kailua and Castle</p>
            <hr />
            </div>



            <div class="colorDarkGray parentTypeLarge">
            <h1>Meet Results </h1>
            <h3>3/7 Qualifying Meet at Castle</h3>

                <p><a href="/results/03072015_Castle_Results.pdf">Results</a> from the Castle track meet (3/7), now available.</p>
            <hr />
            </div>



            <div class="colorDarkGray parentTypeLarge">
                <h1>Training plan online</h1>

                     <p>Coach Fiana has <a href="distance">published the day-to-day workouts</a> so you can get a preview of what's coming up. You can also get it from the slide-out menu under Mid/Long Distance</p>
                <hr />
            </div>



            <div class="colorDarkGray parentTypeLarge">
                <h1>Full Schedule Available</h1>

                     <p><a href="/schedule">Kalaheo Track & Field Schedule 2015</a> now updated to show the complete season all the way out to HHSSA Champs in Maui.</p>
                <hr />
            </div>
            <div class="colorDarkGray parentTypeLarge">



            <h1>Meet Results </h1>
            <h3>2/28 First meet of the season at Castle</h3>
                <p><a href="/results/02282015_Castle_Results.pdf">Results report</a> from Castle track meet on 2/28, now available (with corrected times)</p>
            <hr />
            </div>



              <img class="brandmarkImage" src="/img/logo/x_med_gray_on_clear.png">







                <div class="colorDarkGray parentTypeLarge">
                <p>Your 2015 Track & Field coaching staff:</p>

                <p><span class="bold">Mid & Long Distance:</span><br />
                <a href="mailto:coachfiana@kalaheotrack.com">Fiana Kumm</a>, <a href="mailto:coachtony@kalaheotrack.com">Tony Lyons</a></p>

                <p><span class="bold">Jumps, Strength & Power training:</span><br />
                   <a href="mailto:coachpaul@kalaheotrack.com">Paul Neidhardt</a></p>

                <p><span class="bold">Sprints & Hurdles:</span><br />
                    <a href="mailto:coach@kalaheotrack.com">Arthur Dickerson</a></p>

                </div>


                <div class="parentTypeLarge">
                <h3>Season notes</h3>
                <p class="colorMediumGray">

                </p>
                <ul class="infoBullets colorInfo sizeSmall">


                    <li>Qualifying Meet #2 this weekend (March 7)</li>
                    <li><b>Watch this space!</b> More content, the full season schedule and more is coming online over the next few days - stay tuned!</li>

                </ul>
                </div>



                <div class="parentTypeLarge">
               <h3 class="pushDown">Practice</h3>
              <p class="colorMediumGray">General season practice begins Monday, February 9, and meets 5 days a week from 3:30 to 5:30. Occasionally there will be lighter days, such as the evening before a meet, when practice will be shorter. Stay in touch with your coach for what to expect each week.</p>

            <h3>Running Shoes, attire & equipment</h3>
                <p class="colorMediumGray">
                    It's time to check your running shoes; if you participated in cross country (XC), or if you have been wearing them for more than 5 months, chances are you need a new pair.
                    Look for running shoes that provide support - be sure to stay away from the "minimalist" shoe (such a Nike Free's and any with soles that bend in half)
                     as they can lead to injury. We recommend going to a specialty store such as Be Fit Kailua, Runner's Route, Runner's HI, or
                     The Running Room. When in doubt, your coaches can steer you in the right direction depending on your weekly mileage, track discipline
                     (sprints, middle distance, and distance), and foot type (narrow, high arches, wide feet, etc.).
                      </p>
                <p class="colorMediumGray">For practices, be sure to bring running clothes, socks, shoes, rain jacket, and for the distance squad, warm-up pants for speed workout days. Atheltes who will be working in the weight room need to bring a journal with them to log their workout progress and routines.</p>
                <h3>Spikes</h3>
                <p class="colorMediumGray">Many student athletes ask about track spikes. While they aren't required to compete, your performance can be GREATLY enhanced with their use. If you are interested in purchasing track spikes, check with the running stores listed above or visit <a href="http://www.firsttothefinish.com">First to the Finish</a> and <a href="http://eastbay.com">Eastbay</a> online. These are reputable outlets that often have great sales and promotions for all manner of training shoes, gear, clothers and more.</p>
                <h3>Which spikes should I get?</h3>
                <p class="colorMediumGray">If you are new to track & field, your best bet is to check with your coach for a recommendation, as there are spikes for each type of running: sprinting, jumping, vaulting, mid and long distance.</p>

                <img src="/img/sprinter_spike.png"><img src="/img/mid_distance_spike.png"><img src="/img/long_spike.png">



                <p class="colorMediumGray">A general rule here is to get the best spikes you can, with the lightest weight for your event.</p>

                <h3>Sunrise Meets at The University of Hawai'i</h3>
                <p class="colorMediumGray">UH is offering a series of "off-season" track meets, held Saturday mornings at the University of Hawaii's Clarence T.C. Ching Stadium starting January 24th. These "Sunrise Series" kick off early in the morning, with field events starting around 7:30-8 am, and running events starting at 8:30 am. They are usually done before 11 a.m, so it's a great opportunity to participate in competition outside of our league. Moreover, the U Hawaii track and field team, HPU, and a variety of levels of unattached HS and post-collegiate runners compete at these meets, so there will be plenty of competition to run fast times.</p>
                <h3>Remaining Sunrise Track Meets</h3>
                <ul class="infoBullets colorInfo sizeSmall">
                    <li>#3- Saturday, February 21, 2015</li>
                    <li>#4- Saturday, March 24, 2015</li>
                    <li>#5- Saturday, April 25, 2015</li>

                </ul>




                <h3>The Great Aloha Run</h3>
                <p class="colorMediumGray">
                    Another running event that is always sure to be great is the Great Aloha Run (8.15 miles) held on Monday, February 16, 2015. We are looking to assemble a big Kalaheo turnout for the race - check with <a href="mailto:coachfiana@kalaheotrack.com">Coach Fiana</a> for more details.</p>
                </div>


                <div class="parentTypeLarge trainingTips">
                    <h3>Training</h3>
                    <p class="colorMediumGray">Training puts a strain on your systems, so be sure to follow these tips to get the most out of each practice and competition:</p>

                    <h4>Stay Hydrated</h4>
                    <p class="colorMediumGray tip">keep a water bottle with you all day long- aim to consume 2- 2.5 liters of water before practice.</p>

                    <h4>Nutrition</h4>
                    <p class="colorMediumGray tip">Aim for the “rainbow” when you eat each meal- try not to eat at least an hour before running, or have a lighter snack (your stomach will thank you later). For athletes looking to gain power and speed through the ligting program, be sure you are getting abundant amounts of protein in your diet - your body will use this as fuel to build muscle and strength. Don't worry about putting on bulk or appearing overly muscular - you would need to consume more than several thousand calories a day to look like a body-builder, but our training will improve with more "fuel in your tank" - so eat up!
</p>

                    <h4>Rest</h4>
                    <p class="colorMediumGray tip">Try to get at least 8 hours of sleep each night, every night. Your body loves consistency and getting regular rest is just as important as your workouts.</p>

                    <h4>Intensity</h4>
                    <p class="colorMediumGray tip">Try not to jump into workouts too hard or too soon- ease yourself into training. Many new runners that do not train consistently often get injured FAST once they get back into running again. Coaches will help differentiate workouts for newcomers.</p>
                    </p>

                    <h4>Recovery</h4>
                    <p class="colorMediumGray tip">Follow a regular stretching routine both before AND after working out (active stretching/drills/form work) that will keep you strong and healthy. Following a workout, be sure to engage your muscles in the proper cool down. Ice and <a href="http://www.everythingtrackandfield.com/webapp/wcs/stores/servlet/PBOnePieceView?storeId=10152&catalogId=10753&pagename=462">foam roll</a> at night to keep your legs feeling fresh and injury free.
</p>







            </div>
          </div>
    </div>
  </div>



  <script src="/js/cover.js"></script>
  <script src="/js/offscreen_menu.js"></script>

  </body>

  @stop