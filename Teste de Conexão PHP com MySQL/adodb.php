<pre>
<?
	require("seguro.php");
	include('adodb/adodb5/adodb.inc.php');
	$DB = NewADOConnection($_POST[tipo]);
	if(strlen(trim($_POST[porta])) == 0)
		$DB->Connect($_POST[host], $_POST[login], $_POST[senha], $_POST[banco]);
	else
		$DB->Connect($_POST[host].":".$_POST[porta], $_POST[login], $_POST[senha], $_POST[banco]);
	$rs = $DB->Execute($_POST[query]);
	while ($array = $rs->FetchRow()) {
		print_r($array);
	}
	$DB->Close();
?>
</pre>
