@extends('layout.layouts')
@section('titre')
@stop


@section('contenu')
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">A propos de l'agence</h3>
  
  <p>Créée en 1985  l'agence a travaillé dans de nombreux secteurs : cuisines centrales, logements, écoles, maisons individuelles, centres pour handicapés, centres d'aide par le travail, commerces, locaux industriels, réhabilitations, etc... Cette expérience permet d'appréhender des projets variés s'adaptant à vos besoins. <br>
    De l'esquisse à la remise des clefs, vous serez accompagnés à chaque étape du processus de construction.
    <br>
    Marie-Christine Fauré architecte et son équipe se tiennent à votre disposition pour discuter de votre projet.
    L'agence a reçu le Prix Régional de la Construction Bois Midi-Pyrénées 2014 Mention spéciale transmission du savoir-faire pour la construction de la halle communale du Falga..</p>
    <div class="w3-row">
      <div class="w3-half w3-center w3-padding-large">
        <h3 class="w3-center"><b><i class="fa fa-user w3-margin-right"></i>A propos de l'architecte</b><br></h3>
        <img src="./images/mc.jpg" class="w3-round w3-image " alt="Photo of Me" width="500" height="333">
      </div>
      <!-- Hide this text on small devices -->
      <br>
      <div class="w3-half w3-hide-small w3-padding-large">
        <p>
          <ul>
            <li>Architecte  Diplômée  de  l’Ecole  Spéciale  d’Architecture </li>

            <li>Diplôme de l’institut d’études juridiques de l’urbanisme et de la construction</li>

            <li>Commissaire Enquêteur auprès du Tribunal Administratif de Toulouse  et de la Préfecture de la Haute-Garonne</li>
            <li>Stages de formation continue suivis régulièrement : développement durable, urbanisme, réglementation…</li>

          </ul>
        </p>
      </div>
    </div>

    <div class="w3-content w3-container w3-padding-32">
      <p class="w3-large w3-center w3-padding-16">Distinctions:</p>
      <p> <b>Prix Régional Bois 2014 :</b><br>
Mention spéciale: 
« transmission du savoir-faire »<br>
Halle communale du Falga </p>
    </div>






    <p class="w3-large w3-center w3-padding-16">Outils de predilection:</p>
    <p class="w3-wide"><i class="fa fa-camera"></i>ARCHICAD 10.8</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-laptop"></i>Photoshop</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-photo"></i>Word</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
  </div>

  <div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">14+</span><br>
      Partenaires
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">200+</span><br>
      Chantiers réalisés
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">1240+</span><br>
      Clients Satisfait à 100%
    </div>
    <div class="w3-quarter w3-section">
      <span class="w3-xlarge">Des milliers</span><br>
      de rencontres extraordinaires
    </div>
  </div>



  @stop