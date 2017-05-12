@extends('layouts.base')

@section('content')
  {{-- @include('partials.header') --}}

  <section class="section -hero" id="hero">
    <div class="wrap">
      <div class="centered">
        <h1>
          Julie Dolan<em>&amp;</em> Greg Mitchell
        </h1>
        <p class="date">August 19th, 2017</p>
      </div>
    </div>
  </section>

  <section class="section -mass" id="mass">
    <div class="wrap -thin">
      <div class="flex-row">
        <div class="col">
          <h3>Mass</h3>
          <p class="sub-heading">
            <strong>12:30 PM</strong><br>
          </p>
          <p>
            <strong>Holy Rosary Church</strong><br>
            595 Third Street NW<br>
            Washington, D.C. 20001<br>
          </p>
          <a href="https://www.google.com/maps/dir/''/595+Third+Street+NW,+Washington,+DC+20001/" class="button">Get Directions</a>
        </div>
        <div class="col">
          <h3>Reception</h3>
          <p class="sub-heading">
            <strong>Following Mass</strong>
          </p>
          <p>
            <strong>Father O’Connell Hall</strong><br>
            The Catholic University of America<br>
            620 Michigan Ave. N.E.<br>
            Washington, D.C. 20001
          </p>
          <a href="https://www.google.com/maps/dir/''/620+Michigan+Ave.+N.E.+Washington,+D.C./" target="_blank" class="button">Get Directions</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section -registries" id="registries">
    <div class="wrap">
      <h2>Registries</h2>
      <div class="registries-list">
        <a href="https://www.amazon.com/wedding/registry/3JO89YMBUJ2FW" target="_blank">
          <img src="/images/bedbath.png" alt="">
        </a>
      </div>
    </div>
  </section>

  <section class="section -rsvp" id="rsvp">
    <div class="wrap -thin">
      <div data-module="rsvp">
        <h2>
          Can you make it?
        </h2>

        <div class="rsvp-buttons">
          <button data-to="yes" class="button">Gladly Accept</button><button data-to="no" class="button -light">Regretfully Decline</button>
        </div>

        <div class="rsvp-yes -display-block -show">
          <form action="/rsvp" method="post" autocomplete="off">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
              <h3>We can&rsquo;t wait to see you!</h3>
              <input type="hidden" name="accept" value="yes">
              <div class="form-row -name">
                <label for="name">Full Name and Guest</label>
                <input type="text" name="name" id="name" placeholder="Mr. and Mrs. Benjamin Franklin" required>
              </div>
              <div class="form-row -name">
                <label for="email">Your Email or Phone<small>In case we need to get in touch</small></label>
                <input type="text" name="email" id="email" placeholder="">
              </div>
              <div class="form-row">
                <label for="message">A Message to the Bride and Groom</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="form-row">
                <input type="submit" value="Send RSVP" class="button">
              </div>
            </fieldset>
          </form>
        </div>
        <div class="rsvp-no">
          <form action="/rsvp" method="post" autocomplete="off">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <fieldset>
              <h3>We are sorry to miss you!</h3>
              <input type="hidden" name="accept" value="no">
              <div class="form-row">
                <label for="name">Full Name and Guest</label>
                <input type="text" name="name" id="name">
              </div>
              <div class="form-row">
                <label for="message">A Message to the Bride and Groom</label>
                <textarea name="message" id="message"></textarea>
              </div>
              <div class="form-row">
                <input type="submit" value="Send RSVP" class="button">
              </div>
            </fieldset>
          </form>
        </div>
      </div>

    </div>
  </section>

  @include('partials.footer')
@endsection
