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
      <input name="grade" type="number" min="0.75" max="6" step="0.25" value="3" />
    </div>
    <div>
      <label for="weight">Gewichtung</label>
      <input name="weight" type="number" name="weigh" min="1" max="5" value="1" />
    </div>
    <div>
      <button type="submit" name="submitGrade" class="btn btn-primary">Speichern</button>
    </div>
  </form>
{/block}
