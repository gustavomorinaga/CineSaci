<?php

function Navbar(string $path, string $titlePage): String {
  $logo = "${path}images/logo.png";

  return "
    <!DOCTYPE html>
    <html lang='pt-br'>
    
    <head>
      <meta charset='UTF-8' />
      <meta name='viewport' content='width=device-width, initial-scale=1.0' />
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'
        integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous' />
      <link rel='stylesheet' href='${path}styles/custom.css' />
      <title>${titlePage} – Cine Saci</title>
    </head>
    
    <body>
      <header>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
          <a class='navbar-brand' href='${path}index.php'>
            <img class='logo' src='${logo}' alt='Logo do Cine Saci' />
          </a>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavId'
            aria-controls='collapsibleNavId' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <section class='collapse navbar-collapse justify-content-end' id='collapsibleNavId'>
            <ul class='navbar-nav mt-2 mt-lg-0'>
              <li class='nav-item'>
                <a class='nav-link' href='${path}index.php'>HOME</span></a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='${path}pages/categoria/comedia.php'>COMÉDIA</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='${path}pages/categoria/drama.php'>DRAMA</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='${path}pages/categoria/acao.php'>AÇÃO</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='${path}pages/quemSomos.php'>QUEM SOMOS</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='${path}pages/contato.php'>CONTATO</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='${path}pages/normas.php'>NORMAS</a>
              </li>
            </ul>
          </section>
        </nav>
      </header>
  ";
}
