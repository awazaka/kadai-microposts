@if (Auth::id() == $micropost->user_id)
    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete', ['class' => "btn btn-danger"]) !!}
    {!! Form::close() !!}
@endif