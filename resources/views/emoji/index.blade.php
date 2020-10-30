<ul>

    @foreach ($emoji as $item)
        <li>
            <div>{{$item->slug}}</div>
            <div>{{$item->character}}</div>
            <div>{{$item->unicodeName}}</div>
            <div>{{$item->codePoint}}</div>
            <div>{{$item->group}}</div>
            <div>{{$item->subGroup}}</div>
        </li> 
    @endforeach
</ul>