@extends('layout.index')
@section('content')
    <form action="/{{ $id_show->id }}/update" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="nom" value={{ $id_show->name }}>
        <input type="number" name="age" placeholder="age" value={{ $id_show->age }}>
        <select name="genre" default={{ $id_show->genre }}>
            @if ($id_show->genre == 'Homme')
                <option value="Homme" selected>homme</option>
                <option value="Femme">femme</option>
            @elseif($id_show->genre == 'Femme')
                <option value="Homme">homme</option>
                <option value="Femme" selected>femme</option>
            @endif
        </select>
        <button type="submit">submit</button>
    </form>
    <form action="/{{$id_show->id}}/delete" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="delete">delete</button>
    </form>
@endsection
