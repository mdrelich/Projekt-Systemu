{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
</div>
    </br></br>
{/block}

{block name=bottom}



{if \core\RoleUtils::inRole('Premium') or \core\RoleUtils::inRole('admin') or \core\RoleUtils::inRole('pracownik')}
    <center>PLANY TRENINGOWE I DIETA DLA UZYTKOWNIKOW PREMIUM<br>
    <img src="https://i2.wp.com/www.codzienniefit.pl/wp-content/uploads/2014/07/harmonogram-treningow.jpg?resize=640%2C452" width="1150 " height="750"></center>
{/if}
{if \core\RoleUtils::inRole('kupujacy')}
    <center>KUP KONTO PREMIUM ABY KORZYSTAC Z TEJ FUNKCJI</center>
{/if}
{/block}

