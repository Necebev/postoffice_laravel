@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="{{route('cities.index')}}">Cities</a>
<a href="{{route('counties.create')}}">Create</a>
<a href="{{route('counties.index', ['sort_by'=>'name','sort_dir'=>'asc'])}}" title="ascending">+</a>
<a href="{{route('counties.index', ['sort_by'=>'name','sort_dir'=>'desc'])}}" title="descending">-</a>
<form action="{{route('counties.index')}}">
            <input type="text" placeholder="Megye" name="search">
            <button>
                Keresés
            </button>
        </form>
<ul>
    @foreach($counties as $county)
    <li>{{$county->name}}
        {{$county->getPopulation()}}
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