  {foreach from=$result item=oneItem} {foreach from=$result2 item=oneItem2}
<header>
    <div class="container">
        <div class="image" style="background: url('{$oneItem.afbeelding_locatie}') center;">
            <div class="overlay">
                <h1>{$oneItem.naam_locatie}</h1>
                <p>{$oneItem.informatie_locatie}</p>
                <a href="#" class="btn">Evenementen</a>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->


<!-- Locaties -->
<section id="locations">
<div class="container">

<aside>
<div class="btn active" id="btn-all">Alles</div>
<div class="btn" id="btn-cultuur">Cultuur</div>
<div class="btn" id="btn-kunst">Kunst</div>
</aside>

<div class="thumbs">

<div class="col-25 filter-kunst" style="background: url('{$oneItem2.thumbnail}') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>{$oneItem2.naam_vereniging}</h3>
      <p>
        {$oneItem2.beschrijving}
      </p>
  </div>
</a>
</div>

<div class="col-25 filter-cultuur" style="background: url('http://onh.nl/data/uploads/thumbnails/2014052121537d057e285e3.jpg') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>Edam Kaasmarkt</h3>
      <p>Lorem ipsum dolor sit amet ,
          consectetur adipiscing amet elit.
      </p>
  </div>
</a>
</div>

<div class="col-25 filter-cultuur" style="background: url('http://www.holland.com/upload_mm/0/4/2/2891_fullimage_edam_560x350.jpg') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>Bloemenparadijs</h3>
      <p>Lorem ipsum dolor sit amet ,
          consectetur adipiscing amet elit.
      </p>
  </div>
</a>
</div>

<div class="col-25 filter-kunst" style="background: url('http://upload.wikimedia.org/wikipedia/commons/5/5b/Edam_Grote_of_Sint-Nicolaaskerk.jpg') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>Sint-Nicolaas kerk</h3>
      <p>Lorem ipsum dolor sit amet ,
          consectetur adipiscing amet elit.
      </p>
  </div>
</a>
</div>

<div class="col-25 filter-cultuur" style="background: url('http://hollandtour.org/files/great_edam_city_centre.jpg') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>MeiBeurs</h3>
      <p>Lorem ipsum dolor sit amet ,
          consectetur adipiscing amet elit.
      </p>
  </div>
</a>
</div>

<div class="col-25 filter-kunst" style="background: url('http://www.charmanthotel.com/uploads/1264676830.jpg') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>Art Haven</h3>
      <p>Lorem ipsum dolor sit amet ,
          consectetur adipiscing amet elit.
      </p>
  </div>
</a>
</div>

<div class="col-25 filter-cultuur" style="background: url('http://upload.wikimedia.org/wikipedia/commons/6/64/Fort_bij_Edam_006.JPG') no-repeat center top; background-size: cover;">
<a href="#">
  <div class="overlay">
      <h3>Fort</h3>
      <p>Lorem ipsum dolor sit amet ,
          consectetur adipiscing amet elit.
      </p>
  </div>
</a>
</div>
</div>

<div class="pagination">
<li>
<a href="#" class="active">1</a>
<a href="#">2</a>
<a href="#">3</a>
</li>
</div>

</div>
</section>
<!-- End Locaties -->
  {/foreach}{/foreach}