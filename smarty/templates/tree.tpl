{extends file="main.tpl"}
{block name="main"}
<div class="tree">
  <div class="trunk"></div>
  {foreach from=$subjectsArray item=$subject} <!-- layer 0 -->
    <div class="subject">
      <div class="name">{$subject.name|escape:"html"}</div>
      {foreach from=$subject.grades item=$grade} <!-- layer 1 -->
        <div class="level">
          <div class="mark">
            {$grade.grade|escape:"html"}
          </div>
        </div>
      {/foreach}
    </div>
  {/foreach}
</div>
{/block}