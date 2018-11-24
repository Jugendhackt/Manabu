{extends file="main.tpl"}
<div class="tree">
  <div class="trunk"></div>
  {* {foreach from $subjects item=$subject} <!-- layer 0 --> *}
    <div class="subject">
      <div class="branch">Mathe</div>
      {* {foreach from $subject item=$level} <!-- layer 1 --> *}
        <div class="level">
          <div class="mark">
            Note 1,3
          </div>
          <div class="name"></div>
        </div>
      {* {/foreach} *}
    </div>
  {* {/foreach} *}
</div>
