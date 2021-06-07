{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}registerSave" method="post" class="pure-form pure-form-aligned">
</br></br></br></br>	
    

<fieldset>
		<legend><h2>Rejestracja</h2></legend>
		<div class="pure-control-group">
            <label for="name">Login</label>
            <input id="login" type="text" placeholder="np. Marcin93" name="login" value="{$form->login}">
        </div>
		<div class="pure-control-group">
            <label for="description">Hasło</label>
            <input id="password" type="text" placeholder="" name="password" value="{$form->password}">
        </div>
        		<div class="pure-control-group">
            <label for="description">Imie</label>
            <input id="first_name" type="text" placeholder="" name="first_name" value="{$form->first_name}">
        </div>
        		<div class="pure-control-group">
            <label for="description">Nazwisko</label>
            <input id="second_name" type="text" placeholder="" name="second_name" value="{$form->second_name}">
        </div>
        
        <div class="pure-control-group">
            <label for="quantity">NIP</label>
            <input id="NIP" type="text" placeholder="*NIE WYMAGANE" name="NIP" value="{$form->NIP}">
        </div>
        
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}productList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="{$form->id_user}">
</form>	
</div>

{/block}
