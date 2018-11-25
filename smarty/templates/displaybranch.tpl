{extends file="main.tpl"}
{block name=main}
  <div class="branch">
    <div class="subjectname">{$subjectname|escape: "html"}</div>
    <div class="average">{$average|escape: "html"}</div>
    {foreach from=$grades item=$grade}
      <div class="grade">
          <div class="name">Gewichtung: {$grade.weight|escape: "html"}</div>
          <div class="value">Note: {$grade.grade|escape: "html"}</div>
      </div>
    {/foreach}
  </div>
{/block}
