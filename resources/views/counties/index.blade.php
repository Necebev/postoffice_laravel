@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="{{route('cities.index')}}">Cities</a>
<a href="{{route('counties.create')}}">Create</a>

<ul>
    @foreach($counties as $county)
    <li>{{$county->name}}
        <img src="{{$county->badge}}"></img>
        <a href="{{route('counties.edit',$county->id)}}">Edit</a>
        <form action="{{route('counties.destroy', $county->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection