<form action="{{route('emoji.store')}}" method="POST">
    @csrf
    @method("POST")
        <input type="text" name="slug" placeholder="slug">
        <input type="text" name="character" placeholder="character">
        <input type="text" name="unicodeName" placeholder="Unicode Name">
        <input type="text" name="codePoint" placeholder="Code Point">
        <input type="text" name="group" placeholder="group>
        <input type="text" name="subGroup" placeholder="sub Group">
        <input type="submit" value="Send">
    </form>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif