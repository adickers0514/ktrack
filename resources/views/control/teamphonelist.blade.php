@section('content')

Here's the phone list:
<p>
@foreach ($phones as $phone)

    {{ $phone->phone}} <br>


@endforeach
</p>
@stop