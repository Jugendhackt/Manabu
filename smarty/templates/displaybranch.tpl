{extends file="main.tpl"}
{block name=main}
  <div class="branch">
    <div class="subjectname">{$subjectname|escape: "html"}</div>
    {foreach from=$grades item=$grade}
      <div class="grade">
          <div class="name">{$grade.name|escape: "html"}</div>
          <div class="value">Note: {$grade.value|escape: "html"}</div>
      </div>
    {/foreach}
  </div>
{/block}
