<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{if $header_title != ""}{$header_title}{else}SourceBans{/if}</title>
<link rel="Shortcut Icon" href="./images/favicon.png" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bangers">
<script type="text/javascript" src="./scripts/sourcebans.js"></script>
<link href="themes/{$theme_name}/css/css.php" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./scripts/mootools.js"></script>
<script type="text/javascript" src="./scripts/contextMenoo.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.cookie.js"></script>

{$tiny_mce_js}
{$xajax_functions}


</head>

	<div id="header">
		<div id="head-logo">
    		<a href="index.php?p=banlist">
    			<img src="images/{$header_logo}" border="0" alt="Csarenası Logo" />
    		</a>
		</div>
	</div>
	<div id="tabsWrapper">
		<div id="mainwrapper">
            <div id="tabs">
	            {if $logged_in}
	                <div style="float: right;">
	         	        <ul>
	         	        	<li>
	         	        		<a style="background-color: #c0392b;" href='index.php?p=logout'>Çıkış</a>
	         	        	</li>
	         	        </ul>
	         	    </div>
	         	    <div class="user">Hoşgeldin, <a href='index.php?p=account'>{$username}</a></div>
	                {else}
	                <div style="float: right;">
	                    <ul>
	                    	<li>
	          	                <a style="background-color: #2ecc71;" href='index.php?p=login'>Giriş</a>
	          	            </li>
	          	        </ul>
	          	    </div>
	            {/if}
                <ul> 