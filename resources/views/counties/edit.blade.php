@extends('layout')

@section('content')
    <form action="{{ route('counties.update',$county->id ) }}" method="post">
    @csrf
    @method('PUT')
    <fieldset>
        <label for="name">Megye név</label>
        <input type="text" name="name" id="name" value="{{ old('name', $county->name)}}">
        <label for="badge">Címer</label>
        <input type="text" name="badge" id="badge">
    </fieldset>
    <button type="submit">Mentés</button>
</form:action>
@endsection