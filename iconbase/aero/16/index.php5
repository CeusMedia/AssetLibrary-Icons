<?php
/**
 *	Start Script for Tool 'IconBrowser'.
 *	@access		public
 *	@author		Christian Würker <Christian.Wuerker@CeuS-Media.de>
 *	@since		15.08.2006
 *	@version		0.1
 */
set_time_limit(1);
$folder	= getCwd();
$path	= realpath( $folder );
do 
{
	$path	= dirname( $path );
	if( file_exists( $path."/browser.php5" ) )
	{
		require_once( $path."/browser.php5" );
		break;
	}
}
while( preg_match( "@icons@", $path ) );
?>