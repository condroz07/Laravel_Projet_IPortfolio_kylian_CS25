<form action="/update/{{ $edit->id }}" method="POST">
    @csrf
        <h2><strong>Name : </strong><input type="text" value="{{ $edit->name }}" name="name"></h2>
        <input type="range" aria-valuemin="0" aria-valuemax="100" value="{{ $edit->pourcent }}" name="pourcent">
        <button type="submit">Edit</button>
</form>