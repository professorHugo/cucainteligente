<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">Cuca<span> Inteligente</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <?php 
        if( isset($_GET['URL']) ){
          switch($_GET['URL']){
            case $_GET['URL'] : $URL = $_GET['URL'];break;
          }
        }else{
          $URL = 'HOME';
        }
      ?>
      <ul class="navbar-nav ml-auto" <?= $URL ?> >
        <li class="nav-item <?= $URL == 'HOME' ? 'active' : '' ?>"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item <?= $URL == 'About' ? 'active' : '' ?>"><a href="?URL=About" class="nav-link">Sobre</a></li>
        <li class="nav-item <?= $URL == 'Services' ? 'active' : '' ?>"><a href="?URL=Services" class="nav-link">Serviços</a></li>
        <li class="nav-item <?= $URL == 'Portfolio' ? 'active' : '' ?>"><a href="?URL=Portfolio" class="nav-link">Portfolio</a></li>
        <!-- <li class="nav-item <?= $URL == 'Pricing' ? 'active' : '' ?>"><a href="?URL=Pricing" class="nav-link">Preços</a></li> -->
        <!-- <li class="nav-item <?= $URL == 'Blog' ? 'active' : '' ?>"><a href="?URL=Blog" class="nav-link">Blog</a></li> -->
        <li class="nav-item <?= $URL == 'Contact' ? 'active' : '' ?>"><a href="?URL=Contact" class="nav-link">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>