<ul>
    <!--<a href="/practice"><li class="allCaps">practice</li></a>
    <a href="/sprints"><li class="allCaps">sprints</li></a>
     <a href="/mid-long-distance"><li class="allCaps">mid/long distance</li></a>
    <a href="/strength-and-power"><li class="allCaps">WEIGHT TRAINING</li></a>
    <a href="/schedule"><li class="allCaps">schedule & results</li></a>
    <a href="/contact"><li class="allCaps">contact</li></a>
    <!-- <li class="allCaps toggle-menu">menu</li> -->
    <!--<a href="/contact"><li class="allCaps">contact</li></a>-->

    <?php if(Auth::check()) { ?>
      <li class="allCaps "><i class="fa fa-user"></i> <a href="/profile/{{Auth::user()->id}}"> {{ Auth::user()->firstname }} </a></li>
    <?php } else { ?>
      <li class="allCaps "><a href="/auth/login">Login</a></li>
    <?php }  ?>

    <li class="toggle-menu"><i class="fa fa-bars"></i></li></a>

</ul>


