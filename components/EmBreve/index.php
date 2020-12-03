<?php

function EmBreve(string $path, string $margin = "0rem"): String {
  $json = file_get_contents("${path}database/data.json");
  $filmes = json_decode($json);
  
  return "
    <aside class='col-sm-3 soon-content' style='margin-top: ${margin};'>
      <h2>Em breve</h2>
      " . $breveItem = EmBreveItem("${path}images/number1.png", $filmes->filmes[0]->pagina->titulo, $filmes->filmes[0]->data) . "
      " . $breveItem = EmBreveItem("${path}images/number2.png", $filmes->filmes[1]->pagina->titulo, $filmes->filmes[1]->data) . "
      " . $breveItem = EmBreveItem("${path}images/number3.png", $filmes->filmes[2]->pagina->titulo, $filmes->filmes[2]->data) . "
      " . $breveItem = EmBreveItem("${path}images/number4.png", $filmes->filmes[3]->pagina->titulo, $filmes->filmes[3]->data) . "
      " . $breveItem = EmBreveItem("${path}images/number5.png", $filmes->filmes[4]->pagina->titulo, $filmes->filmes[4]->data) . "
      <section class='row'>
        <article class='more col-sm-12'>
          <h3>VER MAIS...</h3>
        </article>
      </section>
    </aside>
  ";
}

function EmBreveItem(string $img, string $titulo, string $data): String {
  return "
    <section class='row'>
      <aside class='col-sm-3'>
        <img src='${img}' alt='' />
      </aside>
      <article class='col-sm-9'>
        <h3>${titulo}</h3>
        <p>${data}</p>
      </article>
    </section>
  ";
}
