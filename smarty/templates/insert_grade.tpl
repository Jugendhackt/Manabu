{extends file="main.tpl"}
{block name=main}
  <form action="?parm=addgrade" method="post">
    <div>
      <label for="subject">Fach</label>
      <select name="subject">
       {html_options values=$subjects|escape="html" output=$subjects|escape="html"}
     </select>
    </div>
    <div>
      <label for="grade">Note</label>
      <input type="number" min="0.75" max="6" />
    </div>
  </form>
{/block}
