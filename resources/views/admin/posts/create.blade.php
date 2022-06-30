@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titolo: </label>
                        <input type="text" name="title" placeholder="Inserisci il titolo">
                    </div>
                    <div class="form-group">
                        <select name="category_id" id="category">
                        <option value="">No Option</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione Del Post: </label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="inserisci descrizione del post">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Inserisci immagine</label>
                        <input type="file" name="image" placeholder="Inserisci immagine" class="form-control-file">
                    </div>
                    <hr>
                    <h5>TAGS:</h5>
                    @foreach ( $tags as $tag )
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="tag-{{ $tag->id }}"
                                value=" {{ $tag->id }} "
                                name="tags[]"
                                @if ( in_array($tag->id, old('tags', []) ) ) checked @endif
                            >
                            <label class="form-check-label" for="tag-{{ $tag->id }}">{{ $tag->label }}</label>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-success">Crea Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection 