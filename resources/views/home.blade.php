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
            <strong>5:00 PM</strong>
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

  <section class="section -accommodations" id="accommodations">
    <div class="wrap">
      <div class="accommodations">
        <h3>Accommodations</h3>
        <div class="wrap -thin">
          <p>A block of rooms has been reserved at the Courtyard Marriott hotel in Silver Spring, Maryland.  Please use the following link if you wish to reserve one or more rooms or to find more information about the hotel.</p>
          <p><small>Please note that to take advantage of the group rate, reservations must be made by August 3.</small></p>
        </div>
        <div class="accommodation">
          <a href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Dolan-Mitchell%20Wedding%5Ewassv%60DMWDMWA%7CDMWDMWB%60109.00%60USD%60false%604%608/18/17%608/20/17%608/3/17&app=resvlink&stop_mobi=yes" class="button">Book a Room</a>
          <br><br>
          <p>
            <strong>The Courtyard<br>by Marriott Silver Spring Downtown</strong><br>
            8506 Fenton St.<br>
            Silver Spring, MD 20910<br>
          </p>
          <p>
            <a href="tel:3015894899" class="button">Call Hotel</a>
            <span class="and-spacer">or</span>
            <a href="https://www.google.com/maps/dir/''/8506+Fenton+St,+Silver+Spring,+MD+20910/" class="button">View Map</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section -registries" id="registries">
    <div class="wrap">
      <h2>Registries</h2>
      <div class="registries-list">
        <a href="https://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&inventoryCallEnabled=true&registryId=544567258&pwsurl=" target="_blank">
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
                <label for="name">Full Name</label>
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
                <label for="name">Full Name</label>
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
