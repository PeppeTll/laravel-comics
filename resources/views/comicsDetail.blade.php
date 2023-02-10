@extends('layouts.default')

@section('content')
  <section class="sectionDetail">
    <figure class="wrapImg">
      <img src="{{ $detail['thumb'] }}" alt="">
    </figure>
    <article class="wrapDetails">
      <h1> {{ $detail['title'] }} </h1>
      <p> {{ $detail['description'] }} </p>
      <h3> {{ $detail['price'] }} </h3>
    </article>
  </section>
@endsection
