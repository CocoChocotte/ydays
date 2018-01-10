@extends('layout.layouts')
@section('titre')
@stop


@section('contenu')
<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h2 class="w3-center">Contact</h2>
  <p class="w3-center"><em>Je serais heureuse de vous accueillir dans mon agence :</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.660323612682!2d1.4695613152278835!3d43.59279107912333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebcf76fafb3f5%3A0xd3d4718b22fd1c91!2s29+Boulevard+Deltour%2C+31500+Toulouse!5e0!3m2!1sfr!2sfr!4v1510156722558" width="300" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 29 bis, boulevard deltour , 31500 Toulouse<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telephone: 05.61.80.98.52<br>
        <i class="fa fa-fax fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Fax : 05.62.16.13.10 <br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mariechristfaure@free.fr<br>
      </div>
      <p>Venez me rencontrez <i class="fa fa-handshake-o"></i>, ou laissez un message:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> Envoyer
        </button>
      </form>
    </div>
  </div>
</div>


@stop