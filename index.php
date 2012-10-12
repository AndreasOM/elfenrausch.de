<?php
# :TODO: move to lib
function getContentName( $pagename ){
                $result=str_replace(".html",".page",$pagename);
                return $result;
}

	require_once '../Twig/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem( array( '.', '_templates' ) );
	$twig = new Twig_Environment(
		$loader,
		array(
#			'cache' => '_cache',
#			'auto_reload' => true,
			'debug' => true,
		)
 	);

        $page="index.html";
        if( !empty( $argv[1]) ){
                $_REQUEST["page"] = $argv[1];
        }
        if( !empty( $_REQUEST["page"] ) ){
                $page = $_REQUEST["page"];
        }

	$contentName = getContentName( $page );

	try{
	$text = $twig->render( $contentName, array() );
	}catch(Exception $e){
		header( 'Location:  http://'.$_SERVER['SERVER_NAME'].'/', false, 302 );
		end();
	}

	mb_convert_encoding( $text, 'HTML-ENTITIES', 'UTF-8' );

	echo $text;


