{extends file="main.tpl"}
{block name=main}
  <form action="?param=addgrade" method="post">
    <div>
      <label for="subject">Fach</label>
      <select name="subject" required>
        <option value="" disabled selected>Fach auswählen</option>
       {html_options values=$subjects output=$subjects}
     </select>
    </div>
    <div>
      <label for="grade">Note</label>
      <input type="number" min="0.75" max="6" step="0.25" value="3" />
    </div>
    <div>
      <label for="description">Beschreibung</label>
      <input type="text" name="description" />
    </div>
    <div>
      <label for="weigh">Gewichtung</label>
      <input type="number" name="weigh" min="1" max="5" value="1" />
    </div>
    <div>
      <button>Speichern</button>
    </div>
  </form>
{/block}
