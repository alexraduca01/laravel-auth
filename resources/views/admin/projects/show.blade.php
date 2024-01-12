@extends('layouts.app')
@section('content')
    <section class="container text-white">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->body }}</p>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i></a>
        <div class="d-flex justify-content-end align-items-center gap-3">
            <a href="{{ $project->url }}" class="text-white fs-2"><i class="fa-brands fa-github"></i></a>
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger" data-item-title="{{ $project->title }}"><i class="fa-solid fa-trash-can"></i></button>
            </form>
        </div>

    </section>
    @include('partials.modal_delete')
@endsection
