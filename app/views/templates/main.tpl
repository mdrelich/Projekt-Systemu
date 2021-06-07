<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Sklep ABC</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a href="{$conf->action_root}productList" class="w3-bar-item w3-button w3-padding-large w3-white">Strona główna</a>
    {if count($conf->roles)>0}
    <a href="{$conf->action_root}logout" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Wyloguj</a>
    {else}	
    <a href="{$conf->action_root}login" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Zaloguj</a>
    {/if}
    {if count($conf->roles)<1}
    <a href="{$conf->action_root}registerNew" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Rejestracja</a>{/if}
    <a href="{$conf->action_root}cart" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Koszyk</a>
    {if count($conf->roles)>0}
    <a href="{$conf->action_root}history" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Historia zakupów</a>{/if}
    {if count($conf->roles)>0}
    <a href="{$conf->action_root}premium" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">STREFA PREMIUM</a>{/if}
  </div>
</div>
  
  

{block name=top} {/block}

{block name=messages}
{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}
{include file="footer.tpl"}
</body>

</html>