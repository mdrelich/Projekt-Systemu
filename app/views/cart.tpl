{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
</div>	
    </br></br>
{/block}

{block name=bottom}
    <center><h1>Skład twojego koszyka</h1></center>
<center><table id="tab_people" class="pure-table pure-table-bordered"></center>
<thead></br></br></br></br>
	<tr>
		<th>Nazwa produktu:</th>
		<th>Dostępnych:</th>
		<th>Waga:</th>
                <th>Kolor:</th>
                <th>Aktualna cena:</th>
                <th></th>
                <th>W koszyku:</th>
                <th></th>
                
	</tr>
      
</thead>
<tbody>
{foreach $product as $p}
{strip}
	<tr>
                <td>{$p["name"]}</td>
                <td>{$p["quantity"]}<a> sztuk</a></td>
                <td>{$p["weight"]}<a> gram</a></td>
                <td>{$p["color"]}</td>
                <td>{$p["price"]}<a> zł</a></td>
                <td></td>
                <td>{$p["quantity_cart"]}</td>
		<td>
                    
                    
                        <a class="button-small pure-button button-secondary" href="{$conf->action_url}addToHistory/{$p['idproduct']}">Potwierdź zakup</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}cartDelete/{$p['idproduct']}">Usuń z koszyka</a>
		</td>
	</tr>
{/strip}
{/foreach}



{/block}
