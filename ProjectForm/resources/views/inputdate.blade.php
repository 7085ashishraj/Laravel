<h2>Selected Course </h2>
<ul>
    @if($skill)
        @foreach($skill as $s)
        <li>
            {{ $s }}
        </li>
        @endforeach
    @else
        <li>No course selected</li>
    @endif
</ul>
<h2>Gender</h2>
<p>{{ $gender }}</p>
<h3>City</h3>
<p>{{ $city }}</p>