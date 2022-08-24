@extends('layout.index')
@section('content')

<form action="/addmembre/create" method="post">
    @csrf
    <input type="text" name="name" placeholder="nom">
    <input type="number" name="age" placeholder="age">
    <select name="genre" placeholder="genre" >
        <option value="homme">homme</option>
        <option value="femme">femme</option>
    </select>
    <button type="submit">submit</button>
</form>


@endsection
