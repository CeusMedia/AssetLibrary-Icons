<?php
/**
 *	Start Script for Tool 'IconBrowser'.
 *	@access			public
 *	@author			Christian Würker <Christian.Wuerker@CeuS-Media.de>
 *	@since			15.08.2006
 *	@version		0.1
 */
if( !isset( $folder ) )
	$folder	= getCwd();
$folders	= $files	= array();
foreach( new DirectoryIterator( $folder ) as $file )
{
	$filename	= $file->getFilename();
	if( $file->isDot() )
		continue;
	if( $file->isDir() )
		$folders[$filename]	= "<a href='".$filename."'>".$filename."</a>";
	else if( $file->isFile() && $file->getFilename() != "index.php5" )
		$files[$filename]	= "<img class='zoomable' src='".$filename."' alt='".$filename."'/>";	
}

/*  --  SORT  --  */
$list	= array_flip( $folders );
natcasesort( $list );
$folders	= array_flip( $list );
$list	= array_flip( $files );
natcasesort( $list );
$files	= array_flip( $list );

$folders	= implode( " | ", $folders );
$files		= implode( " ", $files );
echo require_once( ".index/browser.phpt" );
?>