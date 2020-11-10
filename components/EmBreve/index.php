<?php

function EmBreve(string $margin = "0rem"): String {
  return "
    <div class='col-sm-3 soon-content' style='margin-top: ${margin};'>
      <h2>Em breve</h2>
      " . $breveItem = EmBreveItem('https://hyperflix.vercel.app/static/media/Logo.632cc64b.png', 'Filme', '27 de janeiro de 2077') . "
      " . $breveItem = EmBreveItem('https://hyperflix.vercel.app/static/media/Logo.632cc64b.png', 'Filme', '27 de fevereiro de 2077') . "
      " . $breveItem = EmBreveItem('https://hyperflix.vercel.app/static/media/Logo.632cc64b.png', 'Filme', '27 de março de 2077') . "
      " . $breveItem = EmBreveItem('https://hyperflix.vercel.app/static/media/Logo.632cc64b.png', 'Filme', '27 de abril de 2077') . "
      " . $breveItem = EmBreveItem('https://hyperflix.vercel.app/static/media/Logo.632cc64b.png', 'Filme', '27 de maio de 2077') . "
      <div class='row'>
        <div class='more col-sm-12'>
          <h3>VER MAIS...</h3>
        </div>
      </div>
    </div>
  ";
}

function EmBreveItem(string $img, string $titulo, string $data): String {
  return "
    <div class='row'>
      <div class='col-sm-3'>
        <img src='${img}' alt='' />
      </div>
      <div class='col-sm-9'>
        <h3>${titulo}</h3>
        <p>${data}</p>
      </div>
    </div>
  ";
}

?>
