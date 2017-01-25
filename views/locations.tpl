  {foreach from=$result item=oneItem}
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

{/foreach}

<!-- Locaties -->
<section id="locations">
<div class="container">

<aside>
<div class="btn active" id="btn-all">Alles</div>
<div class="btn" id="btn-cultuur">Cultuur</div>
<div class="btn" id="btn-kunst">Kunst</div>
</aside>

<div class="thumbs">
{foreach from=$result2 item=oneItem2}
<div class="col-25 filter-kunst" style="background: url('{$oneItem2.thumbnail}') no-repeat center top; background-size: cover;">
<a href="?action=pagina&vereniging={$oneItem2.id}">
  <div class="overlay">
      <h3>{$oneItem2.naam_vereniging}</h3>
      <p>
        {$oneItem2.beschrijving}
      </p>
  </div>
</a>
</div>
{/foreach}
</div>
</section>
<!-- End Locaties -->
