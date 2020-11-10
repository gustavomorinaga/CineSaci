<?php

function Footer(string $path): String {
  $pages = 'pages/';

  return "
    <footer>
      <div class='container'>
        <div class='row'>
          <section class='map-website col-sm-7'>
            <h6>Mapa do Site</h6>
            <div class='row'>
              <ul class='col-sm-3'>
                <li><a href='${path}index.php'>Home</a></li>
                <li><a href='${path}${pages}categoria/comedia.php'>Comédia</a></li>
                <li><a href='${path}${pages}categoria/drama.php'>Drama</a></li>
                <li><a href='${path}${pages}categoria/acao.php'>Ação</a></li>
              </ul>
              <ul class='col-sm-3'>
                <li><a href='${path}${pages}quemSomos.php'>Quem Somos</a></li>
                <li><a href='${path}${pages}contato.php'>Contato</a></li>
                <li><a href='${path}${pages}normas.php'>Normas</a></li>
              </ul>
            </div>
          </section>

          <section class='newsletter-register col-sm-5'>
            <h6>Inscreva-se para receber notícias</h6>
            <form action='#' method='post'>
              <label for='email'>
                <input type='email' name='email' id='email' placeholder='E-Mail' />
              </label>
              <button type='submit'>Enviar</button>
            </form>
          </section>
        </div>
      </div>
    </footer>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
    </body>
    </html>
  ";
}

?>
