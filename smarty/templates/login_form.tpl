{extends file="main.tpl"}
{block name=main}
  <form action="login.php?param=login" method="post" class="align-middle m-3 p-2">
    <div class="form-group">
      <label for="user">Nutzername</label>
      <input type="text" id="user" name="user" class="form-control" placeholder="Benutzer" />
    </div>
    <div class="form-group">
      <label for="passwd">Passwort</label>
      <input type="password" id="passwd" class="form-control" name="passwd" placeholder="Passwort" />
    </div>
    <button type="submit" name="login" class="btn btn-primary">Anmelden</button>
  </form>
{/block}
