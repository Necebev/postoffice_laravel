@extends('layout')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<a href="{{route('counties.index')}}">Counties</a>
<a href="{{route('cities.create')}}">Create</a>
<a href="{{route('cities.index', ['sort_by'=>'name','sort_dir'=>'asc'])}}" title="ascending">+</a>
<a href="{{route('cities.index', ['sort_by'=>'name','sort_dir'=>'desc'])}}" title="descending">-</a>
<form action="{{route('cities.index')}}">
            <input type="text" placeholder="Város" name="search">
            <select name="county">
                <option value="">Összes megye</option>
                @foreach ($counties as $county)
                    <option value="{{$county->id}}">{{$county->name}}</option>
                @endforeach
            </select>
            <button>
                Keresés
            </button>
        </form>

<ul>
    @foreach($cities as $city)
    <li>
        {{$city->name}} {{$city->zip_code}} {{$city->population}} {{$city->getCounty($city->county_id)}}
        <a href="{{route('cities.edit',$city->id)}}">Edit</a>
        <form action="{{route('cities.destroy', $city->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" id="delete">Delete</button>
        </form>
    </li>
    @endforeach
</ul>

<div class="pagination">
        {{$cities->withQueryString()->links()}}
</div>

@endsection