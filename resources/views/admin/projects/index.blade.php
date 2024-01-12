@extends('layouts.app')
@section('content')
    <section class="container text-white">
        <h1>Projects List</h1>
        <div class="container">
            <div class="row gap-3">
                @foreach ($projects as $item)
                    <div class="card p-0" style="width: calc(100% / 4 - 1rem)">
                        <img src="" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ substr($item->body,0,100)."..." }}</p>
                            <div>
                                <a href="{{ route('admin.projects.show', $item->id) }}" class="btn btn-primary">More</a>
                                <a href="{{ route('admin.projects.edit', $item->id) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                                <form action="{{route('admin.projects.destroy', $item->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button btn btn-danger" data-item-title="{{ $item->title }}">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
