<!DOCTYPE html>
<html>
<head>
    <title>KWM Corona</title>
</head>
<body>
<ul>
    @foreach($vaclocations as $vaclocation)
        <li><a href="vaclocations/{{$vaclocation->id}}">{{$vaclocation->city}} {{$vaclocation->address}}</a></li>
    @endforeach
</ul>
</body>
</html>
