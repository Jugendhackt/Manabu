{extends file="main.tpl"}
{block name=main}
  <form action="login.php?param=login" method="post">
    <input type="text" name="user" />
    <input type="password" name="passwd" />
    <button type="submit" name="login" class="btn-primary">Anmelden</button>
  </form>
{/block}
