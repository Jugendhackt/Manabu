<div class="tree">
  <div class="trunk"></div>
  {foreach from $subjects item=$subject}
    <div class="subject">
      {}<div class="branch">{$subject.name|escape:"html"}</div> -->
      {foreach from $subject item=$level}
        <div class="level">
          <div class="mark">
            {$level.mark|escape:"html"}
          </div>
          <div class="name">{$level.name|escape:"html"}</div>
        </div>
      {/foreach}
    </div>
    {foreachelse}
      <div class="nosubject">Keine Fächer</div>
    {/foreachelse}
  {/foreach}
</div>
