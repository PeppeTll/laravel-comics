@extends('layouts.default')

@section('content')
  <div class="jumboWrapper">
    <img src="/img/jumbotron.jpg" alt="">
  </div>
  <section class="sectionCard">
    <div class="container cardWrapper">
      @foreach ($comics as $index => $value)
        <div class="card">
          <!-- la funzione route() richiama l'url con il nome assegnato,
            (il nome che passiamo a route() viene assegnato dal metodo 
            ->name('nome assegnato') vedi cartella web.php riga 761.),
            accetta anche un secondo argomento al quale passiamo il 
            nome del parametro che si aspetta l'url e il valore che
            vogliamo asseggnare a quel parametro ['nome parametro' => $valore]  -->
          <a href="{{ route('comics.show', ['id' => $index]) }}">
            <figure>
              <img src="{{ $value['thumb'] }}" alt="">
            </figure>
            <h4>
              {{ $value['title'] }}
            </h4>
          </a>
        </div>
      @endforeach
      <div class="seriesTag">
        <h2>
          current series
        </h2>
      </div>
    </div>
    <button class="button">
      <h3>
        <a href="/">load more</a>
      </h3>
    </button>
  </section>
  <section class="linkShop">
    <div class="linkWrapper container">
      @foreach ($links as $item)
        <div class="cardLink">
          <img src="{{ $item['img'] }}" alt="">
          <p>
            {{ $item['name'] }}
          </p>
        </div>
      @endforeach
    </div>
  </section>
@endsection
