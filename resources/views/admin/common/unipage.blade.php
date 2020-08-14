<form method="POST" action="/perform">
    @csrf
    @foreach($hiddenAttributes as $hiddenAttr)
        @php
            echo $hiddenAttr;    
        @endphp
    @endforeach
    @foreach($visualAttributes as $visualAttr)
        @php
            echo $visualAttr;    
        @endphp
    @endforeach

    <button type="submit">Create</button>
    <button type="button">Cancel</button>
</form> 