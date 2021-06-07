pure {extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
    </br></br></br>
	<fieldset>
    <div class="form-container sign-in-container">
        <form action="{$conf->action_url}login" method="post">
            <legend><h2>Logowanie do systemu</h2></legend>
            <span>login:</span>
            <label>
                <input type="id_login" name="login" placeholder="podaj login"/>
            </label>
            </br>
            <span>hasło:</span>
            <label>
                <input type="id_password" name="password" placeholder="podaj haslo"/>
            </label>
        </form>
    </div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
{/block}
