{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}productSave" method="post" class="pure-form pure-form-aligned">
    <fieldset></br></br>
		<legend>Dane produktu</legend>
		<div class="pure-control-group">
            <label for="name">Nazwa</label>
            <input id="name" type="text" placeholder="np. Białko serwatkowe" name="name" value="{$form->name}">
        </div>
		<div class="pure-control-group">
            <label for="description">opis produktu</label>
            <input id="description" type="text" placeholder="opis" name="description" value="{$form->description}">
        </div>
        
        <div class="pure-control-group">
            <label for="quantity">Ilosc</label>
            <input id="description" type="text" placeholder="ilosc" name="quantity" value="{$form->quantity}">
        </div>
        
        		<div class="pure-control-group">
            <label for="weight">waga</label>
            <input id="weight" type="text" placeholder="domyślnie w gramach" name="weight" value="{$form->weight}">
        </div>
        		<div class="pure-control-group">
            <label for="color">smak</label>
            <input id="color" type="text" placeholder="np. czekolada" name="color" value="{$form->color}">
                        </div>
        		<div class="pure-control-group">
            <label for="price">cena</label>
            <input id="price" type="text" placeholder="np. 10" name="price" value="{$form->price}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}productList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="{$form->id}">
</form>	
</div>

{/block}
