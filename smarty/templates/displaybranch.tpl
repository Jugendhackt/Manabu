{extends file="main.tpl"}
{block name=main}
<div class="container">
  <a href="?" class="btn btn-primary mt-2">&lt; Zurück</a>
</div>
  <div class="branch container">
    <div class="">
      <h1 class="subjectname mb-0">{$subjectname|escape: "html"}</h1>
      <div class="text-muted">Ø {$average|escape: "html"}</div>
    </div>
    <div class="">
    {foreach from=$grades item=$grade}
      <div class="grade mt-3 bg-primary p-2 align-center">
          <div class="name">Gewichtung: {$grade.weight|escape: "html"}</div>
          <div class="value">Note: {$grade.grade|escape: "html"}</div>
      </div>
    {/foreach}
  </div>
  </div>
{/block}
