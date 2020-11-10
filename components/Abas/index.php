<?php

function Abas(string $aba, string $abasItem1, string $abasItem2, string $abasItem3, bool $active): String {
  if ($active === true) {
    $activeClass = "active";
  } else {
    $activeClass = "";
  }

  return "
    <div class='tab-pane ${activeClass}' id='${aba}'>
      <div class='row'>
        ${abasItem1}
        ${abasItem2}
        ${abasItem3}
      </div>
    </div>
  ";
}

function AbasItem(string $img, string $alt, string $data, string $descricao): String {
  return "
    <div class='col-sm-4'>
      <div class='card'>
        <img src='${img}' alt='${alt}' />
        <div class='news-description'>
          <div class='new'>Novo</div>
          <caption>
            ${data}
          </caption>
        </div>
        <div class='card-body'>
          <p class='card-text'>${descricao}</p>
        </div>
      </div>
    </div>
  ";
}
