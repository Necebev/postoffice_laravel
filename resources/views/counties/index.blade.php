@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<ul>
    @foreach($counties as $county)
    <li>{{$county->name}}<img src="{{$county->badge}}"></img></li>
    @endforeach
</ul>