@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>
        <p>
            <ul>
                @foreach ($projects as $item)
                    <li>{{ $item->title }} <a href="{{ route('admin.projects.show', $item->id) }}">vedi dettagli</a></li>
                @endforeach
            </ul>
        </p>
    </section>
@endsection
