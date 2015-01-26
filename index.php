<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html><head><title>GoCompareTheConfusedMoneySuperMeerkat.com - Comparing Comparison Sites</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta NAME="description" CONTENT="price comparison">
<meta NAME="KEYWORDS" CONTENT="price comparison">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12127318-21', 'gocomparetheconfusedmoneysupermeerkat.com');
  ga('send', 'pageview');

</script>

</head><body bgcolor="#f4c37c">

<map name="logomap">
  <area shape="rect" coords="0,0,211,110" alt="gocompare" href="http://www.gocompare.com">
  <area shape="rect" coords="251,0,362,110" alt="Confused" href="http://www.confused.com">
  <area shape="rect" coords="362,0,539,110" alt="moneysuper" href="http://www.moneysupermarket.com">
  <area shape="rect" coords="539,0,645,110" alt="meerkat" href="http://www.comparethemeerkat.com">
</map>

<div align="center">
<br/> <br/> <br/>
<img src="GCTCMSM.png" usemap="#logomap">
</div>


<script type="text/javascript" src="assets/J50Npi.js"></script>
<script type="text/javascript" src="assets/worker.js"></script>

<script type="text/javascript">
	var url = "http://gocomparetheconfusedmoneysupermeerkat.com:8082/";
	var data = {};
	var callback = function(results) {
		var html = "<table border=0>";

		var votes = 0;
		for(var idx in results.data) {
			var entry = results.data[idx];
			votes += entry.count;
		}

		for(var idx in results.data) {
			var entry = results.data[idx];
			var barWidth = (entry.count / votes) * 400;

			html += '<tr><td>' + entry.name + '</td>';
			html += '<td><img src="assets/red.jpg" height="30" width="' + barWidth+'">(' + entry.count + ')</td>';
			html += '<td><a href="' + url + 'vote?site=' + idx + '">Vote</a></td></tr>';
		}

		html += "</table>";

		document.getElementById("voting").innerHTML = html;
	};

	J50Npi.getJSON(url + "ajaxget", data, callback);
</script>
<br/><br/><br/>
<p></p>
	<div align="center">
So, what is your favourite price comparison, comparison, site?
	</div>
<br/><br/><br/>
	<div id="voting" align="center">
		Acquiring data from Ultra...
	</div>


</body>
</html>

