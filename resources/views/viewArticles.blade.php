<html>
<ul>
        @foreach($x as $y)
        <li><a href="{{url('app/getitem',$y->title)}}">{{$y->title}}</li>
        @endforeach
    </ul>
</html>