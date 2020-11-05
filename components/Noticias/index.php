<?php

function Noticias(): String
{
  return "
    <div class='row'>
      <div class='row content'>
        <div class='col-sm-8 news'>
          <div class='col-sm-12'>
            <h2>Notícias</h2>
          </div>
          " . $noticiaItem =
    Noticia(
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
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
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
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
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Consequuntur unde quis eius soluta aspernatur.
      Quas cupiditate vitae rem quis! Facere quos quidem hic. Iure
      harum eligendi, consequuntur eveniet cum deserunt!",
      "24 de Março de 2077"
    ) . "

        </div>

        <div class='col-sm-4 top-movies'>
          <h4>Top Filmes</h4>

        " . $topFilme =
    TopFilme(
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Janeiro de 2077"
    ) . "

            " . $topFilme =
    TopFilme(
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Fevereiro de 2077"
    ) . "

    " . $topFilme =
    TopFilme(
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Março de 2077"
    ) . "

      " . $topFilme =
    TopFilme(
      "https://hyperflix.vercel.app/static/media/Logo.632cc64b.png",
      "Alguma coisa",
      "FILMES",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
      "24 de Abril de 2077"
    ) . "
        </div>
      </div>
    </div>
  ";
}

function Noticia(string $img, string $alt, string $titulo, string $descricao, string $data): String {
  return "
    <div class='col-sm-12'>
      <div class='row'>
        <div class='col-sm-2'>
          <img class='logo' src='${img}' alt='${alt}' />
        </div>

        <div class='col-sm-10'>
          <h3>${titulo}</h3>

          <p>
            ${descricao}
          </p>

          <p>${data}</p>
          <hr />
        </div>
        <hr />
      </div>
    </div>
  ";
}

function TopFilme(string $img,string $alt,string $titulo,string $descricao,string $data): String {
  return "
    <div class='row'>
      <div class='col-sm-3'>
        <img class='logo' src='${img}' alt='${alt}' />
      </div>

      <div class='col-sm-9'>
        <h5>${titulo}</h5>

        <p>${descricao}</p>
        <p>${data}</p>
        <hr />
      </div>
    </div>
  ";
}
