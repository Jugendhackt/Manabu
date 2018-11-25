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
    <main class="{$mainClass|escape:"html"|default:""}">
      {block name=main}{/block}
    </main>
  </body>
</html>
