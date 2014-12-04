@section('main')
<h2>Usuarios</h2>
@if (!$users->count())
Aun no existe ningun usuario.
@else
<ul>
    @foreach($users as $user)
    <li>
        <a href="{{route('users.show',$user->id)}}">
        <strong>{{$user->usuario}}</strong>
    </li>
    @endforeach
</ul>
@endif
@stop