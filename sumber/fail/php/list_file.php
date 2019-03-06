<?php
/*
$fileList = glob('/*.*');
foreach($fileList as $filename)
{
	# Use the is_file function to make sure that it is not a directory.
	if(is_file($filename))
	{
		echo $filename . '<br>';
	}
}
*/
function getFileList($dir)
{
	# array to hold return value
	$retval = [];
	# add trailing slash if missing
	if(substr($dir, -1) != "/") { $dir .= "/"; }
	# open pointer to directory and read list of files
	$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
	while(FALSE !== ($entry = $d->read()))
	{
		# skip hidden files
		if($entry{0} == ".") continue;
		if(is_dir("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}/",
			'type' => filetype("{$dir}{$entry}"),
			'size' => 0,
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
		elseif(is_readable("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}",
			'type' => mime_content_type("{$dir}{$entry}"),
			'size' => filesize("{$dir}{$entry}"),
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
	}

	$d->close();
	return $retval;
}
#-------------------------------------------------------------------------------------------------------------
function pautan($name)
{
	return '<i class="far fa-folder fa-spin"></i>'
	. '<a target="_blank" href="' . $name . '">'
	. $name . '</a><hr>';
}
#-------------------------------------------------------------------------------------------------------------
function pautan02($name,$web)
{
	return '<i class="far fa-folder fa-spin"></i>'
	. '<a target="_blank" href="' . $web . '">'
	. $name . '</a><hr>';
}
#-------------------------------------------------------------------------------------------------------------
function list_files()
{
	$weblist = getWebsite();
	$dirlist = getFileList("./");
	//echo "<pre>",print_r($dirlist),"</pre>";
	//echo '<tr><td> name</td><td> type</td><td> size</td><td> lastmod</td></tr>';
	diatas();
	foreach($weblist as $name => $web):
		echo "\n" . pautan02($name,$web);
	endforeach;
	foreach($dirlist as $key02 => $value):
		if ($value['type'] == 'dir'):
			echo "\n" . pautan($value['name']);
		else:echo '';endif;
	endforeach;
	dibawah();
}
#-------------------------------------------------------------------------------------------------------------
function getWebsite()
{
	$papar = array(
		'./espl/'=>'//espl.stats.gov.my/spl',
		'./newss/'=>'//newss.stats.gov.my',
		'./msic/'=>'//msic.stats.gov.my',
		'./emasco/'=>'https://www.jobsmalaysia.gov.my/emasco',
		'./eBGB/'=>'https://ebgb.dosm.gov.my',
		'./qss/'=>'//qss.stats.gov.my',
		'./ejob/'=>'//ejob.stats.gov.my'
	);

	return $papar;
}
#-------------------------------------------------------------------------------------------------------------
function diatas()
{
print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>List Folder</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
.fa-input {font-family: FontAwesome}
</style>
</head>
<body>

END;
}
#-------------------------------------------------------------------------------------------------------------
function dibawah()
{
	print <<<END

<!-- Footer
================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2016. Theme Asal Bootstrap Twitter
		</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
END;
}
#-------------------------------------------------------------------------------------------------------------