{extends file="main.tpl"}
{block name="main"}
<div class="tree">
  <div class="trunk"></div>
  {foreach from=$subjectsArray item=$subject} <!-- layer 0 -->
    <div class="subject">
      <a href="tree.php?param=detailSubject&amp;sid={$subject.id|escape:"html"}"><span class="name">{$subject.name|escape:"html"}</span></a>
          <div class="mark">
            {$subject.grades.average|escape:"html"}
          </div>
      {/foreach}
    </div>
</div>
{/block}