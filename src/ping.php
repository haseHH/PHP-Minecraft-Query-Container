<?php
    require __DIR__ . '/lib/MinecraftPing.php';
    require __DIR__ . '/lib/MinecraftPingException.php';

    use xPaw\MinecraftPing;
    use xPaw\MinecraftPingException;

    $server = $_GET["server"];
    if ( array_key_exists("port", $_GET) ) {
        $port = intval($_GET["port"]);
    } else {
        $port = 25565;
    }

    try
    {
        $Query = new MinecraftPing( $server, $port );
        echo JSON_Encode( $Query->Query() );
    }
    catch( MinecraftPingException $e )
    {
        echo $e->getMessage();
    }
    finally
    {
        if( isset($Query) )
        {
            $Query->Close();
        }
    }
?>