<!DOCTYPE html>
<html>
<head>
    <title>KWM Corona</title>
</head>
<body>
<ul>
    @foreach($vaclocations as $vaclocation)
        <li>{{$vaclocation->zip}} {{$vaclocation->city}}</li>
    @endforeach
</ul>
</body>
</html>
