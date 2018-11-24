{extends file="main.tpl"}:''
{block name=main}
  <form action="?param=edit&amp;id={$id|escape:'html'|default:''}">
    <div>
      <label for="name">Klassenarbeitsname</label>
      <input type="text" value="{$name|escape:'html'|default:''}" />
    </div>
    <div>
      <label for="grade">Note</label>
      <input type="number" name="grade" value="{$grade|escape:'html'|default:''}" />
    </div>
    <input type="hidden" value="{$id|escape:'html'|default:''}" />
    <button>Updaten</button>
  </form>
{/block}
