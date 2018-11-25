<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>{$pageTitle|escape: "html"}</title>
    {block name=head}{/block}
  </head>
  <body>
    <header class="header">
      {block name=header}{/block}
    </header>
    <nav class="navbar navbar-fixed-top navbar-light bg-dark text-white">
      <div class="navbar-header">
        <a class="navbar-brand text-white" href="tree.php"><!--<img src="/src/logo.svg" alt="Manabu" height="40px">-->Manabu</a>
      </div>
       <ul class="nav navbar-nav">
          <li class="nav-item"><a href="logout.php" class="nav-link text-white">Abmelden</a></li>
       </ul>
    </nav>
    <main class="{$mainClass|escape:"html"|default:""}">
      {block name=main}{/block}
    </main>
  </body>
</html>
