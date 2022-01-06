<div>
    {{-- Be like water. --}}
    @foreach( $users as $user)
        {{ $user['login']}} <br/>
    @endforeach
</div>
