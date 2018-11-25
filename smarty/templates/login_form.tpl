{extends file="main.tpl"}
{block name=main}
  <form action="login.php?param=login" method="post" class="align-middle m-3">
    <div class="form-group">
      <label for="user">Nutzername</label>
      <input type="text" id="user" name="user" class="form-control" placeholder="Benutzer" />
    </div>
    <div class="form-group">
      <label for="passwd">Passwort</label>
      <input type="password" id="passwd" class="form-control" name="passwd" placeholder="Passwort" />
    </div>
    <button type="submit" name="login" class="btn btn-success">Anmelden</button>
  </form>
{/block}
