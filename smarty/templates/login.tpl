{extends file="main.tpl"}
{block name=main}
  <form action="login.php?login=1#" method="post">
    <input type="text" name="user" />
    <input type="password" name="passwd" />
    <button type="submit" name="login">Anmelden</button>
  </form>
{/block}