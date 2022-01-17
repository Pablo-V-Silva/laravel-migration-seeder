@extends('layout.app')


@section('content')

<div class="container">
  <div class="row row-cols-4">

    @foreach ($holidays as $holiday)
    <div class="col">
      <div class="card">
        <div class="card_body">
          <img src="https://picsum.photos/200/300" alt="">
        </div>
        <div class="card_info">
          <section class="text">
            <h3>{{$holiday->to}} from {{$holiday->from}}</h3>
            <p>Holiday start {{$holiday->start_date}} and finish {{$holiday->end_date}}
              <br>
              Pay now!
            </p>
            <button>{{$holiday->price}}€</button>
          </section>
        </div>
      </div>

    </div>
    @endforeach

  </div>
</div>
@endsection