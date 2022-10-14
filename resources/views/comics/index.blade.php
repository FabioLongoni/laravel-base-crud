@extends('layouts.app')

@section('metaTitle', 'DcComics - Comics')

@section('content')
<section class="main__content">
  <div class="hero">
    <button id="btn__current">current series</button>
  </div>
  <div class="container container__card">
    @foreach ($comics as $comic)
      <article class="card">
        <a href="{{ route('comics.show',$comic) }}">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
          <div>{{ $comic->series }}</div>
        </a>
      </article>
    @endforeach
  </div>
  <div class="main__button container">
    <button id="load__button"><a href="#">load more</a></button>
  </div>
</section>
@endsection