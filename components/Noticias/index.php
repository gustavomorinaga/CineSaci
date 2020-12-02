<?php

function Noticias(string $path): String
{

  $path = $path . "/images/";

  return "
    <section class='row'>
      <section class='row content'>
        <article class='col-sm-8 news'>
          <section class='col-sm-12'>
            <h2>Notícias</h2>
          </section>
          " . $noticiaItem =
    Noticia(
      "${path}o-homem-do-futuro.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Consequuntur unde quis eius soluta aspernatur.
              Quas cupiditate vitae rem quis! Facere quos quidem hic. Iure
              harum eligendi, consequuntur eveniet cum deserunt!",
      "24 de Janeiro de 2077"
    ) . "

              " . $noticiaItem =
    Noticia(
      "${path}de-pernas-pro-ar.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur unde quis eius soluta aspernatur.
                Quas cupiditate vitae rem quis! Facere quos quidem hic. Iure
                harum eligendi, consequuntur eveniet cum deserunt!",
      "24 de Fevereiro de 2077"
    ) . "

    " . $noticiaItem =
    Noticia(
      "${path}faroeste-caboclo.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Consequuntur unde quis eius soluta aspernatur.
      Quas cupiditate vitae rem quis! Facere quos quidem hic. Iure
      harum eligendi, consequuntur eveniet cum deserunt!",
      "24 de Março de 2077"
    ) . "

        </article>

        <aside class='col-sm-4 top-movies'>
          <h4>Top Filmes</h4>

        " . $topFilme =
    TopFilme(
      "${path}lisbela-e-o-prisioneiro.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Janeiro de 2077"
    ) . "

            " . $topFilme =
    TopFilme(
      "${path}o-som-ao-redor.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Fevereiro de 2077"
    ) . "

    " . $topFilme =
    TopFilme(
      "${path}que-horas-ela-volta.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Março de 2077"
    ) . "

      " . $topFilme =
    TopFilme(
      "${path}faroeste-caboclo.jpg",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Abril de 2077"
    ) . "
        </aside>
      </section>
    </section>
  ";
}

function Noticia(string $img, string $alt, string $titulo, string $descricao, string $data): String
{
  return "
    <section class='col-sm-12'>
      <section class='row'>
        <aside class='col-sm-4'>
          <img class='logo' src='${img}' alt='${alt}' />
        </aside>

        <article class='col-sm-8'>
          <h3>${titulo}</h3>

          <p>
            ${descricao}
          </p>

          <p>${data}</p>
          <hr />
        </article>
        <hr />
      </section>
    </section>
  ";
}

function TopFilme(string $img, string $alt, string $titulo, string $descricao, string $data): String
{
  return "
    <section class='row'>
      <aside class='col-sm-3'>
        <img class='logo' src='${img}' alt='${alt}' />
      </aside>

      <article class='col-sm-9'>
        <h5>${titulo}</h5>

        <p>${descricao}</p>
        <p>${data}</p>
        <hr />
      </article>
    </section>
  ";
}
