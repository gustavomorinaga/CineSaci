<?php

function Footer(string $path): String {
  $pages = 'pages/';

  return "
    <footer>
      <section class='container'>
        <section class='row'>
          <article class='map-website col-sm-7'>
            <h6>Mapa do Site</h6>
            <section class='row'>
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
            </section>
          </article>

          <aside class='newsletter-register col-sm-5'>
            <h6>Inscreva-se para receber notícias</h6>
            <form action='#' method='post'>
              <label for='email'>
                <input type='email' name='email' id='email' placeholder='E-Mail' />
              </label>
              <button type='submit'>Enviar</button>
            </form>
          </aside>
        </section>
      </section>
    </footer>
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>
    </body>
    </html>
  ";
}

?>
