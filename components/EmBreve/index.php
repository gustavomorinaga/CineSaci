<?php

function EmBreve() {
  return "
    <div class='col-sm-3 soon-content'>
      <h2>Em breve</h2>
      " . $breveItem = EmBreveItem() . "
      " . $breveItem = EmBreveItem() . "
      " . $breveItem = EmBreveItem() . "
      " . $breveItem = EmBreveItem() . "
      " . $breveItem = EmBreveItem() . "
      <div class='row'>
        <div class='more col-sm-12'>
          <h3>VER MAIS...</h3>
        </div>
      </div>
    </div>
  ";
}

function EmBreveItem() {
  return "
    <div class='row'>
      <div class='col-sm-3'>
        <img src='https://hyperflix.vercel.app/static/media/Logo.632cc64b.png' alt='' />
      </div>
      <div class='col-sm-9'>
        <h3>Filme</h3>
        <p>24 de Janeiro de 2077</p>
      </div>
    </div>
  ";
}

?>
