
    <!-- Navigation -->
        <nav class="cbp-spmenu-push" id="nav">
            <div class="container">
                <div class="logo">
                    <a href="index.php">Van <strong>klomp</strong> tot <strong>kunst</strong></a>
                </div>

                <div class="search" id="search"></div>

                <div class="languageswitch">
                    <div class="ned"></div>
                    <div class="eng"></div>
                </div>

                <div class="hamburger" id="showRightPush"></div>

                <ul>
                    <li><a href="?action=home"{if $action == 'home'}class="active"{/if}>Home</a></li>
                    <li>
                      <a href="#" class="locations"{if $action == 'locations'}class="active"{/if}>Locations</a>

                      <div class="dropdown">
                        <div class="row"><a href="?action=locations&location=Edam">Edam</a></div>
                        <div class="row"><a href="?action=locations&location=Volendam">Volendam</a></div>
                        <div class="row"><a href="?action=locations&location=Warder">Warder</a></div>
                        <div class="row"><a href="?action=locations&location=Kwadijk">Kwadijk</a></div>
                        <div class="row"><a href="?action=locations&location=Oosthuizen">Oosthuizen</a></div>
                        <div class="row"><a href="?action=locations&location=Schardam">Schardam</a></div>
                        <div class="row"><a href="?action=locations&location=Beets">Beets</a></div>
                        <div class="row"><a href="?action=locations&location=Middelie">Middelie</a></div>
                        <div class="row"><a href="?action=locations&location=Hobrede">Hobrede</a></div>
                      </div>
                    </li>
                    <li><a href="?action=agenda" id="agenda" {if $action == 'agenda'}class="active"{/if}>Agenda</a></li>
                    <li><a href="?action=contact"{if $action == 'contact'}class="active"{/if}>Contact</a></li>
                </ul>
            </div>
        </nav>
    <!-- End Navigation -->

    <!-- Mobile Navigation -->
       <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
           <h1>Menu</h1>
           <a href="index.php">Home</a>
           <a href="#" id="locaties">Locaties <div class="arrow"></div></a>

          <!-- Mobile subnav -->
          <ul class="subnav">
            <li><a href="?action=locations&location=Edam">Edam</a></li>
            <li><a href="?action=locations&location=Volendam">Volendam</a></li>
            <li><a href="?action=locations&location=Warder">Warder</a></li>
            <li><a href="?action=locations&location=Kwadijk">Kwadijk</a></li>
            <li><a href="?action=locations&location=Oosthuizen">Oosthuizen</a></li>
            <li><a href="?action=locations&location=Schardam">Schardam</a></li>
            <li><a href="?action=locations&location=Beets">Beets</a></li>
            <li><a href="?action=locations&location=Middelie">Middelie</a></li>
            <li><a href="?action=locations&location=Hobrede">Hobrede</a></li>
          </ul>
           <!-- End Mobile subnav -->

           <a href="agenda.php" id="agenda">Agenda</a>
           <a href="contact.php">Contact</a>

           <form action="#" method="POST">
               <!-- <div class="search-btn"></div> -->
               <input type="text" placeholder="Zoeken...">
               <input type="submit" class="search-btn">
           </form>

           <div class="languages">
               <div class="ned"></div>
               <div class="eng"></div>
           </div>
       </div>
    <!-- End Mobile Navigation -->
