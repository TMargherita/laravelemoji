<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emoji</title>
</head>
<body>
    <a href="{{route('emoji.create')}}">Add new Emoji</a>
    <ul>
    @foreach ($emoji as $emoji)
        <li>
            <a href="{{route('emoji.show', $emoji->id)}}">{{$emoji->character}}</a>
            <div>
                <a href="{{route('emoji.edit', $emoji->id)}}">Edit</a>
                <form action="{{route('emoji.destroy', $emoji->id)}}" method="POST">
                 @csrf
                @method("DELETE")
                <input type="submit" value="Delete">
                </form>
            </div>
        </li>
    @endforeach
    </ul>
    <a href="{{route('emoji.create')}}">Add new food</a>

    @if (session()->has('success'))
    <div class="alert alert-success">
        @if(is_array(session('success')))
            <ul>
                @foreach (session('success') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session('success') }}
        @endif
    </div>
    @endif
    
</body>
</html>