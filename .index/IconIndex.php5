<?php
class IconIndex
{
	public static function getSets( $path, $sets )
	{
		$dir	= new DirectoryIterator( $path );
		foreach( $dir as $entry )
		{
			if( $entry->isDot() )
				continue;
			if( !$entry->isDir() )
				continue;
			if( substr( $entry->getFilename(), 0, 1 ) == "." )
				continue;
			$folder	= $entry->getFileName();
			if( in_array( $entry, array_keys( $sets ) ) )
			{
				$list	= self::getList( $path.$folder."/" );
				$title	= $sets[$folder]['name'];
				if( isset( $sets[$folder]['url'] ) && $sets[$folder]['url'] )
					$title	= "<a href='".$sets[$folder]['url']."'>".$title."</a>";
				$divs[]	= require( "includes/set.phpt" );
			}
		}
		$list	= implode( "", $divs );
		return $list;
	}

	public static function getList( $folder )
	{
		$list	= array();
		$dir	= new DirectoryIterator( $folder );
		foreach( $dir as $entry )
		{
			if( $entry->isDot() )
				continue;
			if( !$entry->isDir() )
				continue;
			if( substr( $entry->getFilename(), 0, 1 ) == "." )
				continue;
			$sub	= self::getList( $folder.$entry."/" );
			$list[$entry->getFilename()]	= "<li><a href='".$folder.$entry."/'>".$entry."</a>".$sub."</li>";
		}
		$list	= array_flip( $list );
		natcasesort( $list );
		$list	= array_flip( $list );
		$list	= "<ul>".implode( "\n", $list )."</ul>";
		return $list;
	}
}
?>