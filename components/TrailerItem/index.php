<?php

function TrailerItem(string $img, string $alt, string $titulo, string $descricao): String {
  return "
    <div class='row'>
      <div class='col-sm-4'>
        <img src='${img}' alt='${alt}' />
      </div>
      <div class='col-sm-8'>
        <h3>${titulo}</h3>
        <p>${descricao}</p>
      </div>
    </div>
  ";
}

?>
