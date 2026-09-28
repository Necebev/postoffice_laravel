@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="{{route('counties.index')}}">Counties</a>
<a href="{{route('cities.create')}}">Create</a>
<ul>
    @foreach($cities as $city)
    <li>
        {{$city->name}} {{$city->zip_code}} {{$city->population}} {{$city->county_id}}
        <a href="{{route('cities.edit',$city->id)}}">Edit</a>
        <form action="{{route('cities.destroy', $city->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection