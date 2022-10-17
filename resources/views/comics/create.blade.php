@extends('layouts.app')

@section('metaTitle','DcComics-Create Comic')

@section('content')
  <section>
    <div>
      <h2>
        Add new Comic
      </h2>
    </div>
    <div>
      <form action="{{ route('comics.store') }}" method="POST" style="text-align: center">
        @csrf
        <div class="input-text">
          <label for="name">Title</label>
          <input type="text" name="title" id="title" placeholder="Title">
        </div>
        <div class="input-text">
          <label for="description">Description</label>
          <input type="text" name="description" id="description" placeholder="Description">
        </div>
        <div class="input-text">
          <label for="thumb">Thumb</label>
          <input type="text" name="thumb" id="thumb" placeholder="Thumb">
        </div>
        <div class="input-text">
          <label for="price">Price</label>
          <input type="number" name="price" id="price" placeholder="Price">
        </div>
        <div class="input-text">
          <label for="series">Series</label>
          <input type="text" name="series" id="series" placeholder="Series">
        </div>
        <div class="input-text">
          <label for="sale-date">Sale date</label>
          <input type="text" name="sale_date" id="sale-date" placeholder="Sale date">
        </div>
        <div class="input-text">
          <label for="type">Type</label>
          <input type="text" name="type" id="type" placeholder="Type">
        </div>
        <div class="input-text btn">
          <input type="Submit" value="Go">
        </div>
      </form>
    </div>
  </section>
@endsection