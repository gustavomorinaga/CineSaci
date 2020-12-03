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
      "Zero é um cientista ridicularizado cuja última invenção 
            o levou ao passado, lhe dando a chance de refazer sua vida. 
            De volta à época de faculdade, ele reencontra Helena, sua paixão, 
            mas acaba interferindo em acontecimentos do futuro. Agora, 
            Zero precisa consertar o futuro sem perder Helena de novo",
      "24 de Janeiro de 2077"
    ) . "

              " . $noticiaItem =
    Noticia(
      "${path}de-pernas-pro-ar.jpg",
      "Alguma coisa",
      "FILMES",
      "Após ser abandonada pelo seu marido João e demitida de seu emprego, 
            Alice fecha uma parceria com Marcela, sua vizinha e dona de uma loja 
            de artigos eróticos.",
      "24 de Fevereiro de 2077"
    ) . "

    " . $noticiaItem =
    Noticia(
      "${path}faroeste-caboclo.jpg",
      "Alguma coisa",
      "FILMES",
      "Baseado na música escrita por Renato Russo, o longa 
            acompanha a história de João do Santo Cristo, que deixa Salvador,
            sua cidade natal, e se muda para a Brasília em busca de uma vida melhor.",
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
      "A jovem Lisbela adora ir ao cinema e vive sonhando 
            com os galãs de Hollywood dos filmes que assiste. 
            Leléu é um malandro conquistador, que em meio a uma de 
            suas muitas aventuras chega à cidade da moça",
      "24 de Janeiro de 2077"
    ) . "

            " . $topFilme =
    TopFilme(
      "${path}o-som-ao-redor.jpg",
      "Alguma coisa",
      "FILMES",
      "A vida dos residentes de uma rua de 
            classe média de Recife toma um rumo 
            inesperado quando uma empresa de segurança particular 
            é contratada para trazer paz aos moradores.",
      "24 de Fevereiro de 2077"
    ) . "

    " . $topFilme =
    TopFilme(
      "${path}que-horas-ela-volta.jpg",
      "Alguma coisa",
      "FILMES",
      "A pernambucana Val se mudou para São Paulo 
            com o intuito de proporcionar melhores condições 
            de vida para a filha, Jéssica. Anos depois, a garota lhe telefona, 
            dizendo que quer ir para a cidade prestar vestibular.",
      "24 de Março de 2077"
    ) . "

      " . $topFilme =
    TopFilme(
      "${path}faroeste-caboclo.jpg",
      "Alguma coisa",
      "FILMES",
      "Baseado na música escrita por Renato Russo, o longa 
            acompanha a história de João do Santo Cristo, que deixa Salvador,
            sua cidade natal, e se muda para a Brasília em busca de uma vida melhor.",
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
