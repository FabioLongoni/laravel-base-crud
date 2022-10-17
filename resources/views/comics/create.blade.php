@extends('layouts.app')

@section('metaTitle','DcComics-Create Comic')

@section('content')
  <section>
    <div class="hero">
    </div>  
    <div class="line__blue"></div>
    <div>
      <h2>
        Add new Comic
      </h2>
    </div>
    <div>
      <form action="{{ route('comics.store') }}" method="POST" style="text-align: center">
        @csrf
        <div class="input-text">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" placeholder="Title" style=" @error('title') border-color: red  @enderror">
          @error('title')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text">
          <label for="description">Description</label>
          <input type="text" name="description" id="description" placeholder="Description"  style="@error('description') border-color: red  @enderror">
          @error('description')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text">
          <label for="thumb">Thumb</label>
          <input type="text" name="thumb" id="thumb" placeholder="Thumb"  style="@error('thumb') border-color: red  @enderror">
          @error('thumb')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text">
          <label for="price">Price</label>
          <input type="number" name="price" id="price" placeholder="Price"  style="@error('price') border-color: red  @enderror">
          @error('number')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text">
          <label for="series">Series</label>
          <input type="text" name="series" id="series" placeholder="Series"  style="@error('series') border-color: red  @enderror">
          @error('series')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text">
          <label for="sale-date">Sale date</label>
          <input type="text" name="sale_date" id="sale-date" placeholder="Sale date"  style="@error('sale_date') border-color: red  @enderror">
          @error('sale_date')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text">
          <label for="type">Type</label>
          <input type="text" name="type" id="type" placeholder="Type"  style="@error('type') border-color: red  @enderror">
          @error('type')
            <div style="color: rgb(179, 168, 168); font-size: 12px;" class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="input-text btn">
          <input type="Submit" value="Go">
        </div>
      </form>
    </div>
  </section>
@endsection