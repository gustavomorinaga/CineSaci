<?php

function TrailerItem(string $img, string $alt, string $titulo, string $descricao): String {
  return "
    <section class='row'>
      <aside class='col-sm-4'>
        <img src='${img}' alt='${alt}' />
      </aside>
      <article class='col-sm-8'>
        <h3>${titulo}</h3>
        <p>${descricao}</p>
      </article>
    </section>
  ";
}

?>
