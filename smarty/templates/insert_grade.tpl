{extends file="main.tpl"}
{block name=main}
  <form action="?param=addgrade" method="post" class="align-middle m-3 p-2">
    <div class="form-group">
      <label for="subject">Fach</label>
      <select name="subject" class="form-control" required>
        <option value="" disabled selected>Fach auswählen</option>
       {html_options values=$subjects output=$subjects}
     </select>
    </div>
    <div class="form-group">
      <label for="grade">Note</label>
      <input name="grade" class="form-control" type="number" min="0.75" max="6" step="0.25" value="3" />
    </div>
    <div class="form-group">
      <label for="weight">Gewichtung</label>
      <input name="weight" class="form-control" type="number" name="weigh" min="1" max="5" value="1" />
    </div>
    <div class="form-group" >
      <button type="submit" class="btn btn-primary" name="submitGrade" class="btn btn-primary">Speichern</button>
    </div>
  </form>
{/block}
