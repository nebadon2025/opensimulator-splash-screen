<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<link id="main" rel="stylesheet" href="splash.css" type="text/css" media="screen"/>
<title>OpenSimulator Login</title>

</head>

<body>

<div id='background1'>
<img border="0" src="background_01.png" width="100%" height="100%">
</div>

<div id='main'><br>
<table border="0" width="100%" height="100%' cellspacing="0" cellpadding="0">
	<tr>
		<td height="136" background="header_background.png">
		<img border="0" src="header.png" width="400" height="137">
		</td>
	</tr>
</table>
</div>

<div id='stats1'>
<fieldset class='grey'> 
<? include("gridstats.php"); ?>
</fieldset>
</div>

<div id='regions1'><fieldset class='white2'> 
<a href="secondlife://Region%201" target="_self" style="text-decoration: none;">Region 1</a><br><hr>
<a href="secondlife://Region%202" target="_self" style="text-decoration: none;">Region 2</a><br><hr>
<a href="secondlife://Region%203" target="_self" style="text-decoration: none;">Region 3</a><br><hr>
<a href="secondlife://Region%204" target="_self" style="text-decoration: none;">Region 4</a><br><hr>
<a href="secondlife://Region%205" target="_self" style="text-decoration: none;">Region 5</a><br><hr>
<a href="secondlife://Region%206" target="_self" style="text-decoration: none;">Region 6</a><br><hr>
<a href="secondlife://Region%207" target="_self" style="text-decoration: none;">Region 7</a><br><hr>
<a href="secondlife://Region%208" target="_self" style="text-decoration: none;">Region 8</a><br><hr>
<a href="secondlife://Region%209" target="_self" style="text-decoration: none;">Region 9</a><br>
</fieldset>
</div>

<div id='twitter1'>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 10,
  interval: 30000,
  width: 250,
  height: 290,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('opensim').start();
</script>
</div>

</body>
</html>
