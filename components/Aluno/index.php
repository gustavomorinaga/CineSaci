<?php

function Aluno(string $img, string $alt, string $nome, string $cargo, string $ra, string $area, string $bio): String {
  return "
    <div class='row content'>

      <div class='col-sm-5 img-aluno'>
        <img class='img' src='${img}' alt='${alt}' />
      </div>

      <div class='col-sm-7'>
        <h3>${nome}</h3>
        <p><strong>Cargo: </strong>${cargo}</p>
        <p><strong>R.A.: </strong>${ra}</p>
        <p><strong>Área: </strong>${area}</p>
        <p>$bio</p>
      </div>

    </div>
  ";
}

?>
