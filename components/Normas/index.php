<?php

function ListarNormas(array $normas): String {
  $string = "";

  foreach ($normas as $norma) {
    $string = $string . $norma;
  }

  return $string;
}

function ListarSubtermos(array $subtermos, string $tipo): String {
  $string = "<${tipo}>";

  foreach ($subtermos as $termos) {
    $string = $string . "<li><p>${termos}</p></li>";
  }

  return $string . "</${tipo}>";
}

function Listar(array $lista) {
  $string = "";

  foreach ($lista as $termos) {
    $string = $string . "${termos}";
  }

  return $string;
}

function NormasPainel(int $tab, array $normas, string $active = ""): String {
  return "
    <article class='tab-pane show ${active}' id='tab${tab}' role='tabpanel' aria-labelledby='tab${tab}'>
      <section class='accordion' id='accordion-tab-${tab}'>
        <ol>" . ListarNormas($normas) . "</ol>
      </section>
    </article>
  ";
}

function NormasConteudo(int $parent, int $head, int $content, string $titulo, string $texto, string $show = ""): String {
  $ariaParent = "accordion-tab-${parent}";
  $ariaHeading = "accordion-tab-${parent}-heading-${head}";
  $ariaContent = "accordion-tab-${parent}-content-${content}";

  if ($texto !== "") {
    $texto = "<p>${texto}</p>";
  }

  return "
    <section class='card'>
      <aside class='card-header' id='${ariaHeading}'>
        <li>
          <h5>
            <button class='btn btn-link' type='button' data-toggle='collapse' data-target='#${ariaContent}' aria-expanded='false' aria-controls='${ariaContent}'>$titulo</button>
          </h5>
        </li>
      </aside>
      <article class='collapse ${show}' id='${ariaContent}' aria-labelledby='${ariaHeading}' data-parent='#${ariaParent}'>
        <section class='card-body'>
          ${texto}
        </section>
      </article>
    </section>
  ";
}

function NormasAba(string $aba, string $tab, string $ativo = ""): String {
  return "
    <a href='#${tab}' class='nav-link ${ativo}' data-toggle='pill' role='tab' aria-controls='tab1' aria-selected='true'>
      <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-caret-right-fill tab-icon' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
        <path d='M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z'/>
      </svg>${aba}
    </a>
  ";
}
