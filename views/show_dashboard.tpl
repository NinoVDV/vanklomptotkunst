

{if isset($smarty.session.phpro_user_id)}
<h1>Dashboard Items</h1>
<div id="verenigingpagina">
  <h2>CRUD Verenigingpagina</h2>
  <br>
  <a href="?action=maak_pagina"><img src="images/media/dashboard_icons/add.png" alt="" style="width: 25px;"/></a>
  <a href="?action=bewerk_pagina"><img src="images/media/dashboard_icons/edit.png" alt="" style="width: 25px;"/></a>
  <a href="?action=verwijder_pagina"><img src="images/media/dashboard_icons/delete.png" alt="" style="width: 25px;"/></a>
  
  <br>
  <a href="?action=logout">Log uit</a>
</div>
{/if}
