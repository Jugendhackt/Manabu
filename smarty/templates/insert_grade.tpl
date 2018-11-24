{extends file="main.tpl"}
{block name=main}
  <form action="?parm=addgrade" method="post">
    <div>
      <label for="subject">Fach</label>
      <select name="subject">
       {html_options values=$subjects|escape="html" output=$subjects|escape="html" selected=$selectedSubject}
     </select>
    </div>
    <div>
      <label for="grade">Note</label>
      <input type="number" min="0.75" max="6" />
    </div>
    <div>
      <label for="description">Beschreibung</label>
      <input type="text" name="description" />
    </div>
    <div>
      <label for="weigh">Gewichtung</label>
      <input type="number" name="weigh" min="1" max="5" />
    </div>
    <div>
      <button>Speichern</button>
    </div>
  </form>
{/block}
