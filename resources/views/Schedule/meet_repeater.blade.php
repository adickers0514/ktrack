




<?php


?>

<div class="colorDarkGray schedule-break">

        <h3>{{  date("d F Y",strtotime($meet->date)) }}</h3>
        <h2>{{  date("l",strtotime($meet->date)) }}</h2>
        <a name="{!! str_slug($meet->title, '_') !!}"></a><p>{{ $meet->title }} - <b>at {{$meet->venue->name }}</b>, {{ $meet->start_time }}<br />
        {{ $meet->notes }}</p>

        @if ($meet->results)
            <p><a href="/results/{{ $meet->results }}">{{ $meet->title }}</a> results available</p>
        @endif

<?php $count = 0 ?>

         <div class="schedule-column">
                <ul class="infoBullets NoDots sizeSmall">
                @foreach ($meet->schools as $school)
                    <?php if($school->name == 'Kalaheo')  {?>
                        <li><b>{{ $school->name }}</b></li>
                    <?php } else { ?>
                        <li>{{ $school->name }}</li>
                    <?php } ?>
                    <?php $count++ ?>

                    <?php

                    if($count > 3) {
                        $count = 0;
                        echo '</ul></div><div class="schedule-column"><ul class="infoBullets NoDots sizeSmall">';
                    }


                    ?>




                 @endforeach
                </ul>
         </div>
</div>