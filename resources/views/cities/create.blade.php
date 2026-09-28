@extends('layout')

@section('content')

<form action="{{ route('cities.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Város név</label>
        <input type="text" name="name" id="name">
        <label for="zip_code">Irányítószám</label>
        <input type="text" name="zip_code" id="zip_code">
        <label for="population">Lakosság</label>
        <input type="number" min="0" name="population" id="population">
        <label for="county_id">Megye</label>
        <select id="county_id" name="county_id">
            @foreach ($counties as $county)
                <option value="{{$county->id}}">{{$county->name}}</option>
            @endforeach
        </select>
    </fieldset>
    <button type="submit">Mentés</button>
</form:action>

@endsection