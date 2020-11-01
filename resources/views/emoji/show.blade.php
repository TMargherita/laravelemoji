<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emoji list</title>
</head>
<body> 
        <ul>
            <li>{{$emoji->slug}}</li>
            <li>{{$emoji->character}}</li>
            <li>{{$emoji->unicodeName}}</li>
            <li>{{$emoji->codePoint}}</li>
            <li>{{$emoji->group}}</li>
            <li>{{$emoji->subGroup}}</li>
        </ul>
    <a href="{{route('emoji.edit', $emoji->id)}}">Edit</a>
    <form action="{{route('emoji.destroy', $emoji->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <input type="submit" value="Delete">
    </form>
    
    <a href="{{route('emoji.index')}}">Back</a>

</body>
</html>