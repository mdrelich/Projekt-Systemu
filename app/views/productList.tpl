{extends file="main.tpl"}

{block name=top}
<br> <br> <br> <br> <br>
    <center><div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}productList">
	<legend><center><h2>Wyszukiwarka produktów</h2></center></legend>
	<fieldset>
		<input type="text" placeholder="Podaj nazwe produktu" name="sf_name" value="{$searchForm->name}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Szukaj</button>
	</fieldset>
</form>
        </div>	
{/block}

{block name=bottom}

<div class="bottom-margin">
    {if \core\RoleUtils::inRole("admin")} 
        <a class="pure-button button-success" href="{$conf->action_root}productNew">+ Dodaj produkt</a> {/if}
{if \core\RoleUtils::inRole("pracownik")} 
<a class="pure-button button-success" href="{$conf->action_root}productNew">+ Dodaj produkt</a> {/if}
</div>	</center>

<center><table id="tab_people" class="pure-table pure-table-bordered"></center>
    <thead>
	<tr>
		<th>Nazwa przedmiotu</th>
		<th>Opis przedmiotu</th>
		<th>Dostepna ilość</th>
                <th>Waga</th>
                <th>Smak</th>
                <th>Cena</th>
                <th></th>
               
        </tr>
    <br><br>

</thead>
<tbody>
{foreach $produkty as $p}
{strip}
	<tr>
		<td>{$p["name"]}</td>
		<td>{$p["description"]}</td>
                <td>{$p["quantity"]}<a> sztuk</a></td>
                <td>{$p["weight"]}<a> gram</a></td>
                <td>{$p["color"]}</td>
                <td>{$p["price"]}<a> zł</a></td>
		<td>
                        
                        {* {if count($conf->"quantity")>0} *}
                        <a class="button-small pure-button button-secondary" href="{$conf->action_url}addTocart/{$p['idproduct']}">KUP</a>
                        {if \core\RoleUtils::inRole("admin")} 
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}productEdit/{$p['idproduct']}">Edytuj</a>
                        {/if}
                        {if \core\RoleUtils::inRole("pracownik")} 
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}productEdit/{$p['idproduct']}">Edytuj</a>
                        {/if}
			&nbsp;
                        {if \core\RoleUtils::inRole("admin")} 
			<a class="button-small pure-button button-warning" href="{$conf->action_url}productDelete/{$p['idproduct']}">Usuń</a>{/if}
                        {if \core\RoleUtils::inRole("pracownik")} 
			<a class="button-small pure-button button-warning" href="{$conf->action_url}productDelete/{$p['idproduct']}">Usuń</a>{/if}
		</td>
	</tr>
{/strip}
{/foreach}



{/block}
