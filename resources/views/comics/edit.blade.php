@extends('layouts.app')

@section('metaTitle','DcComics-Edit Comic')

@section('content')
  <section>
    <div class="hero">
    </div>  
    <div class="line__blue"></div>
    <div>
      <h2>
        Edit Comic
      </h2>
    </div>
    <div>
      <form action="{{ route('comics.update',$comic) }}" method="POST" style="text-align: center">
        @csrf
        @method('PUT')

        <div class="input-text">
          <label for="name">Title</label>
          <input type="text" name="title" id="title" value="{{old('title',$comic->title)}}" placeholder="Title">
        </div>
        <div class="input-text">
          <label for="description">Description</label>
          <input type="text" name="description" id="description" value="{{$comic->description}}" placeholder="Description">
        </div>
        <div class="input-text">
          <label for="thumb">Thumb</label>
          <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}" placeholder="Thumb">
        </div>
        <div class="input-text">
          <label for="price">Price</label>
          <input type="number" name="price" id="price" value="{{$comic->price}}" placeholder="Price">
        </div>
        <div class="input-text">
          <label for="series">Series</label>
          <input type="text" name="series" id="series" value="{{$comic->series}}" placeholder="Series">
        </div>
        <div class="input-text">
          <label for="sale-date">Sale date</label>
          <input type="text" name="sale_date" id="sale-date" value="{{$comic->sale_date}}" placeholder="Sale date">
        </div>
        <div class="input-text">
          <label for="type">Type</label>
          <input type="text" name="type" id="type" value="{{$comic->type}}" placeholder="Type">
        </div>
        <div class="input-text btn">
          <input type="Submit" value="Go">
        </div>
      </form>
    </div>
  </section>
@endsection