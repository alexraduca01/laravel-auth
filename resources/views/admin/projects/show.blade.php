@extends('layouts.app')
@section('content')
    <section class="container text-white">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->body }}</p>
        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-button btn btn-danger" data-item-title="{{ $project->title }}">Delete</button>
        </form>
    </section>
@endsection
