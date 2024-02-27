<?php

ignore_user_abort ();
set_time_limit ( 0 );


if (empty(htmlspecialchars($_GET["file"])))
    {
    echo 'Nothing to do here...';
    exit();
    }

$file_type = 'application/zip';
$file_name = htmlspecialchars($_GET["file"]);
$file_name = str_replace('.','',$file_name);
$file_name = str_replace('/','',$file_name);
$file_name = str_replace('\\','',$file_name);
$file_name = str_replace('\$','',$file_name);

$file_path = './'.$file_name.'.zip';

// echo $file_name.'   es    '.$file_path;

if (file_exists($file_path))
    {
    header ( 'Cache-Control: max-age=31536000' );
    header ( 'Content-Length: ' . filesize ( $file_path ) );
    header ( 'Content-Disposition: filename="' . $file_name . '.zip"' );
    header ( 'Content-Type: ' . $file_type . '; name="' . $file_name . '.zip"' );

    readfile ( $file_path );
    unlink ( $file_path );
    }
else
    {
    echo 'Nothing to do here...';
    }

exit ();

?>
