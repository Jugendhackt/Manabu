{extends file="main.tpl"}
{block name=main}
  <form action="login.php?param=login" method="post">
    <input type="text" name="user" placeholder="Benutzer" />
    <input type="password" name="passwd" placeholder="Passwort" />
    <button type="submit" name="login" class="btn btn-success">Anmelden</button>
  </form>
{/block}
