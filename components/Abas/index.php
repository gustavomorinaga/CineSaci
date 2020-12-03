<?php

function Abas(string $aba, string $abasItem1, string $abasItem2, string $abasItem3, bool $active): String
{
  if ($active === true) {
    $activeClass = "active";
  } else {
    $activeClass = "";
  }

  return "
    <section class='tab-pane ${activeClass}' id='${aba}'>
      <section class='row'>
        ${abasItem1}
        ${abasItem2}
        ${abasItem3}
      </section>
    </section>
  ";
}

function AbasItem(string $img, string $alt, string $data, string $descricao, string $link): String
{
  return "
    <section class='col-sm-4'>
      <a href='${link}'>
      <section class='card'>
        <figure class='figure'>
          <img src='./images/${img}' alt='Miniatura de ${alt}' class='figure-img img-fluid' />
        </figure>
        <aside class='news-description'>
          <section class='new'>Novo</section>
          <section class='new-title'> 
            ${data}
          </section>
        </aside>
        <article class='card-body'>
          <p class='card-text'>${descricao}</p>
        </article>
      </section>
      </a>
    </section>
  ";
}
