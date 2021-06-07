{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
</div>	

{/block}

{block name=bottom}
    </br></br>
<center><h1>Historia twoich zakupów</h1></center>

<center><table id="tab_people" class="pure-table pure-table-bordered"></center>
<thead></br></br></br>
	<tr>
                <th>Data zakupu</th>
		<th>Nazwa produktu:</th>
		<th>Waga:</th>
                <th>Smak:</th>
                <th></th>
                <th></th>
                <th>Zakupiono:</th>
                <th>Cena 1 szt:</th>
                <th style="background-color:#FF0000">Łącznie zapłacono:</th>
                
	</tr>
      
</thead>
<tbody>
{foreach $history as $p}
{strip}
	<tr>
                <td>{$p["date_of_purchase"]}</td>
                <td>{$p["name"]}</td>
                <td>{$p["weight"]}<a> gram</a></td>
                <td>{$p["color"]}</td>
                <td></td>
                <td></td>
                <td>{$p["quantity_cart"]}<a>sztuk</a></td>
                <td>{$p["paid_price"]}<a> zł</a></td>
                <td style="background-color:#90EE90">{$p["total_price_history"]}<a> zł</a></td>
                
	</tr>
{/strip}
{/foreach}


{/block}
