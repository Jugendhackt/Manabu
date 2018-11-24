{extends file="main.tpl"}
{block name=main}
  <form action="loginprocess.php" method="post">
    <input type="text" name="user" />
    <input type="password" name="passwd" />
    <button type="submit" name="login">Anmelden</button>
  </form>
{/block}
