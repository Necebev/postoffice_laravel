<form action="{{ route('counties.store') }}" method="post">
    @csrf
    <fieldset>
        <label for="name">Megye név</label>
        <input type="text" name="name" id="name">
        <label for="badge">Megye név</label>
        <input type="text" name="badge" id="badge">
    </fieldset>
    <button type="submit">Mentés</button>
</form:action>