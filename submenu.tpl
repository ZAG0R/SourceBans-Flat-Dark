</ul>
        </div>
	</div>
</div>
<div id="mainwrapper">
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(document).ready(function(){
    var theme = $j.cookie("backgroundImage");
    if (theme){document.getElementById("shelf").style.backgroundImage = "url("+theme+")";}
    $j("#themes").change(function() {
        theme = $j(this).val();
        $j.cookie("backgroundImage", theme);
        document.getElementById("shelf").style.backgroundImage = "url("+theme+")";
    });
});
</script>

<script type="text/javascript">
 
function parseDropdown()
{
  var valueFromCookie = getCookie('themes');
  if (valueFromCookie != "")
  {
    document.getElementById("themes").options.selectedIndex = valueFromCookie;
  }
}

/* Get Cookie */
function getCookie(ZAGOR)
{ 
  if (document.cookie.length > 0) 
  { 
    begin = document.cookie.indexOf(ZAGOR+"="); 
    if (begin != -1) 
    { 
      begin += ZAGOR.length+1; 
      end = document.cookie.indexOf(";", begin);
      if (end == -1) end = document.cookie.length;
      return unescape(document.cookie.substring(begin, end)); 
    } 
  }
  return null; 
}

/* Set Cookie */
function setCookie() 
{
  ZAGOR = "themes";
  value = document.getElementById("themes").options.selectedIndex;
  expiredays = 365;
  var ExpireDate = new Date ();
  ExpireDate.setTime(ExpireDate.getTime() + (expiredays * 24 * 3600 * 1000));
  document.cookie = ZAGOR + "=" + escape(value) + ((expiredays == null) ? "" : "; expires=" + ExpireDate.toGMTString());
}

/* Delete Cookie */
function delCookie (ZAGOR) 
{ 
  if (getCookie(ZAGOR)) 
  {
  document.cookie = ZAGOR + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
  }
} 

</script>

<div id="innerwrapper">
	<div id="navigation">
		<div id="search">
			<form method="get" action="index.php">
				<input type="hidden" name="p" value="banlist" />
				<input class="searchbox" alt="Search Bans" name="searchText" type="text" onfocus="this.value='';" onblur="if (this.value=='') {this.value=' Search Bans...';}" value=" Ban Ara..." />
				<input type="submit" name="Submit" value="Ara" style="cursor:pointer;" class="button" />
			</form>
			<form method="get" action="index.php">
				<input type="hidden" name="p" value="commslist" />
				<input class="searchbox" alt="Search Comms" name="searchText" type="text" onfocus="this.value='';" onblur="if (this.value=='') {this.value=' Search Comms...';}" value=" Mute/Gag Ara... " />
				<input type="submit" name="Submit" value="Ara" style="cursor:pointer;" class="button" />
			</form>

<body id="shelf" onload="parseDropdown();">
<div style="float: right; margin-bottom: -34px;">
<span class="css3-metro-dropdown">
<select id="themes" name="ChangeBG" title="Arkaplan Resmini Değiştir" onchange="setCookie('backgroundImage', this.value, 365);">
  <option selected disabled value="Empty">Select Your Background</option>  
  <option value="./images/bg/tf2.jpg" selected="selected">TF2(Standart)</option>
  <option value="./images/bg/gta5.jpg">GTA V</option>
  <option value="./images/bg/csgo.jpg">CS:GO</option>
  <option value="./images/bg/3.jpg">Mad-Max</option>
  <option value="./images/bg/11.jpg">Crysis</option>
  <option value="./images/bg/22.jpg">Fifa</option>
  <option value="./images/bg/2.jpg">COD</option>
  <option value="./images/bg/38.jpg">Far Cry</option>
  <option value="./images/bg/4.jpg">Mass Effect</option>
  <option value="./images/bg/5.jpg">Need For Speed</option>
  <option value="./images/bg/16.jpg">Assasin's Creed</option>
  <option value="./images/bg/8.jpg">Star Wars</option>
</select>
</span>
</div>
</body>
		</div>
	</div>