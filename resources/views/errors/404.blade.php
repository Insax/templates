@extends('layouts.app')
@section('title')
<title>404 - Page not found</title>
@endsection
@section('content')
  <!-- Main Content -->
  <section class="content-wrap full youplay-404">

    <!-- Banner -->
    <div class="youplay-banner banner-top">
      <div class="image" style="background-image: url('assets/images/game-dark-souls-ii-10-1680x1050.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container align-center">
            <h2 class="h1">404</h2>
            <h3>Page Not Found ;(</h3>


            <form action="search.html">
              <div class="youplay-input">
                <input type="text" name="search" placeholder="Site Search">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="search.html">
      <div class="youplay-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->
@stop