{extends file="main.tpl"}
{block name="main"}
<div class="tree">
  {foreach from=$subjectsArray item=$subject} <!-- layer 0 -->
    <div class="subject container m-5">
      <a href="tree.php?param=detailSubject&amp;sid={$subject.id|escape:"html"}"><span class="name">{$subject.name|escape:"html"}</span></a>
          <span class="smark p-2 text-muted">
            Ø {$subject.grades.average|escape:"html"}
          </span>
    </div>
  {/foreach}
</div>
{/block}
