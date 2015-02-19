@extends('layouts.master')

@section('content')

<title>Kalaheo Track 2015</title>

<link href="/css/cover.css" rel="stylesheet" type="text/css">

<style>

h2 {
    color: #888;
    font-weight: 200;
    font-size: 40px;
    line-height: 52px;
}

</style>
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

                <h1 class="colorBlack">Hmmm...</h1>
                <h2>The page you are looking for doesn't exist. Can we send you to the <a href="/">homepage</a> instead?</h2>







          </div>


          </div>
    </div>
  </div>




  <script src="/js/followbar.js"></script>
<script src="/js/offscreen_menu.js"></script>


  </body>

  @stop