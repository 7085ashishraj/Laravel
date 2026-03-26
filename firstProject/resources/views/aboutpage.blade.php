<!-- <h2>if else-if statemant</h2>
@php $num = 10; @endphp
@if($num>0)
<h1>Positive</h1>
@elseif($num<0)
<h1>Negative</h1>
@else
<h1>zero</h1>
@endif -->

<!-- @for($i=1;$i<=10;$i++)
{{$i}}
@endfor -->

<!-- @php
$i=1;
@endphp
@while($i<=10)
    {{$i++}}
@endwhile -->

{{-- <ul>
    @foreach($courses as $c)
    <li>{{$c}}</li>
    @endforeach
</ul> --}}

<!-- // @php
// $i = 1;
// @endphp
// @while($i<=10)
//     {{$i++}}
//     @continue($i==5)
// @endwhile -->

<table border="1">
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>City</th>
    </tr>
@foreach($studentdata as $s)
    <tr>
        <td>{{$s['Name']}}</td>
        <td>{{$s['Course']}}</td>
        <td>{{$s['City']}}</td>
    </tr>
@endforeach
</table>
