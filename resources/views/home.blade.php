@extends('layout.index')
@section('content')
    <h1>ALL Membres</h1>
    <table style="border:1px solid black; margin: 10px; padding:10px;">
        <thead>
            <th>id</th>
            <th>nom</th>
            <th>genre</th>
            <th>age</th>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>

                    <td> <a href="{{ $membre->id }}/show">{{ $membre->id }}</a></td>
                    <td><a href="{{ $membre->id }}/show">{{ $membre->name }}</a></td>
                    <td><a href="{{ $membre->id }}/show">{{ $membre->genre }}</a></td>
                    <td><a href="{{ $membre->id }}/show">{{ $membre->age }}</a></td>
                </tr>
            @endforeach
            <tr>
                <td><a href="{{ route('addmembre') }}"><button>add membre</button></a></td>
                <td>
                    <form action="/membres/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete all membres</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
