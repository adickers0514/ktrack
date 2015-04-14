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

              <p>Practice @Castle High School, 4:00-@5:30-6PM</p>

              <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule, updated for April.</a></p>


             <br />

             <h3>Dissecting your race pace</h3>

             <P>100m @15.0 = 200m @30.05</P>
             <P>100m @14.0 = 200m @28.19</P>
             <P>100m @13.2 = 200m @26.65</P>
             <P>100m @12.8 = 200m @25.86</P>
             <P>100m @12.2 = 200m @24.65</P>
             <P>100m @12.0 = 200m @24.24</P>
             <P>100m @11.9 = 200m @24.03</P>
             <P>100m @11.8 = 200m @23.82</P>
             <P>100m @11.7 = 200m @23.62</P>
             <P>100m @11.5 = 200m @23.20</P>
             <P>100m @11.4 = 200m @22.99</P>
             <P>100m @11.0 = 200m @22.14</P>
             <P>100m @10.5 = 200m @21.07</P>

             <br />
<p><b>Sprinters/Jumpers:</b> 800m jog. Warm up. Stretch. Speed Drills. </p>

            <p>3 x fly 100m (20-25m fly, 100m clocked, spikes) @race pace. R=15min between reps. Rest before 200m = 20mins.</p>
            <p>2 x 200m @race pace (spikes, from blocks) to acquire 100m splits</p>

            <p>800m cool down.</p>


<h3>Race plan: 100m</h3>
                                         <table class="tableSettings">
                                             <tbody>
                                               <tr>
                                                   <td class="captionTableColumn">0-30m</td>
                                                   <td class="dataTableColumn">Acceleration, drive phase mechanics</td>
                                               </tr>

                                               <tr>
                                                   <td class="captionTableColumn">30m-55m</td>
                                                   <td class="dataTableColumn">Float - no matter what is going on around you - PATIENCE - wait for it!!!!!</td>
                                               </tr>

                                               <tr>
                                                   <td class="captionTableColumn">55m-80m</td>
                                                   <td class="dataTableColumn">Re-accelerate. Hips Tall. Focus on relaxed face, BIG ARMS. Emphasis on driving leg down into track. NOT on going faster.</td>
                                               </tr>

                                               <tr>
                                                   <td class="captionTableColumn">80m-100m</td>
                                                   <td class="dataTableColumn">Run tall, chest up, chin up, eyes forward, face RELAXED, hands RELAXED, over-emphasis arm motion - BE CONSISTENT in your stride. DO NOT BEAR DOWN to go faster.</td>
                                               </tr>



                                             </tbody>
                                         </table>
              <!--
                              <p>Castle High School - Fast Surface Practice</p>

                                           <p><b>Mid/Long Distance:</b> See Coach Fiana's <a href="http://kalaheotrack.com/distance">practice and training schedule, updated for April.</a></p>


                                           <p><b>Sprinters/Jumpers:</b> 800m jog. Warm up. Stretch. Speed Drills. </p>
                                          <br />
                                           <p><b>100/200</b></p>
                                           <p>10 x 100 @90%. R=1min + 30m all out on the turn. R=8mins between sets.</p>

                                         <p><b>200/400</b></p>
                                         <p>6 x 200 @90%. R=8mins between sets.</p>
              <br />
                                         <h4>Race plan: 100m</h4>
                                         <table class="tableSettings">
                                             <tbody>
                                               <tr>
                                                   <td class="captionTableColumn">0-30m</td>
                                                   <td class="dataTableColumn">Acceleration, drive phase mechanics</td>
                                               </tr>

                                               <tr>
                                                   <td class="captionTableColumn">30m-55m</td>
                                                   <td class="dataTableColumn">Float - no matter what is going on around you - PATIENCE - wait for it!!!!!</td>
                                               </tr>

                                               <tr>
                                                   <td class="captionTableColumn">55m-80m</td>
                                                   <td class="dataTableColumn">Re-accelerate. Hips Tall. Focus on relaxed face, BIG ARMS. Emphasis on driving leg down into track. NOT on going faster.</td>
                                               </tr>

                                               <tr>
                                                   <td class="captionTableColumn">80m-100m</td>
                                                   <td class="dataTableColumn">Run tall, chest up, chin up, eyes forward, face RELAXED, hands RELAXED, over-emphasis arm motion - BE CONSISTENT in your stride. DO NOT BEAR DOWN to go faster.</td>
                                               </tr>



                                             </tbody>
                                         </table>

                                         <h4>Race plan: 200m</h4>
                                                                    <table class="tableSettings">
                                                                        <tbody>
                                                                          <tr>
                                                                              <td class="captionTableColumn">0-30m</td>
                                                                              <td class="dataTableColumn">Acceleration, drive phase mechanics</td>
                                                                          </tr>

                                                                          <tr>
                                                                              <td class="captionTableColumn">30m-110m</td>
                                                                              <td class="dataTableColumn">Float. From top of turn to end of turn, no matter what is going on around you - be patient! Let other athletes BURN THE TURN. When they tie up, you will be re-accelerating.</td>
                                                                          </tr>

                                                                          <tr>
                                                                              <td class="captionTableColumn">110m-140m</td>
                                                                              <td class="dataTableColumn">Re-accelerate. Come off the turn strong, "whipping" around the top of the turn. Emphasis on arm motion: driving arms down and back. Hips tall.</td>
                                                                          </tr>

                                                                          <tr>
                                                                              <td class="captionTableColumn">140m-200m</td>
                                                                              <td class="dataTableColumn">RELAX. Relax. relax. Relax the face. Relax the shoulders. Exaggerate your arm motion - it won't be as high as you think, but will affect your stride. Step over the opposite knee. Drive down.</td>
                                                                          </tr>



                                                                        </tbody>
                                                                    </table>-->

          </div>


          </div>
    </div>
  </div>




  <script src="/js/schedule.js"></script>
<script src="/js/offscreen_menu.js"></script>

  </body>

  @stop