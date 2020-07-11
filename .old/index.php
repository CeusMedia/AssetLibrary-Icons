<?php
require_once( ".index/IconIndex.php5" );
set_time_limit(10);

function getSetList( $setFile, $cacheFile, $refresh )
{
	if( !$refresh && file_exists( $cacheFile ) )
		return file_get_contents( $cacheFile );
	$sets	= parse_ini_file( $setFile, true );
	$list	= IconIndex::getSets( "./", $sets );
	file_put_contents( $cacheFile, $list );
	return $list;
}

$list	= getSetList( '.index/sets.ini', "list.html", isset( $_GET['refreshList'] ) );
echo require_once( ".index/index.phpt" );
?>
