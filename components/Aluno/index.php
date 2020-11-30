<?php

function Aluno(string $img, string $alt, string $nome, string $cargo, string $ra, string $area, string $bio): String {
  return "
    <section class='row content'>

      <aside class='col-sm-5 img-aluno'>
        <img class='img' src='${img}' alt='${alt}' />
      </aside>

      <article class='col-sm-7'>
        <h3>${nome}</h3>
        <p><strong>Cargo: </strong>${cargo}</p>
        <p><strong>R.A.: </strong>${ra}</p>
        <p><strong>Área: </strong>${area}</p>
        <p>$bio</p>
      </article>

    </section>
  ";
}

?>
