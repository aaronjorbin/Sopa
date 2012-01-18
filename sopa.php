<?php

if ( 1==1)// time() >=  1326862740  &&  time() <= 1326949140)
{
    $protocol = $_SERVER["SERVER_PROTOCOL"];
    if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
    header( "$protocol 503 Service Unavailable", true, 503 );
    header( 'Content-Type: text/html; charset=utf-8' );
   
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Aaron Jorbin:  Blacked Out</title>
        <style type="text/css">
            body{background:black;}
            #sopa{
                max-width: 900px;
                margin: 50px auto;
                color: white;
                font-size: 2.2em;
                line-height: 1.35em;
            }
            #sopa a{
                color:#900;
                text-decoration:none;
            }
        </style>
    </head>
    <body>
    <div id='sopa'>
        <h1>Stand Up For Free Speech</h1>
        <p>Congress is close to passing two bills ( SOPA and PIPA) that threaten to cripple the job-creating engine that is the social web. These laws would allow anyone with a copyright infringement claim on even one small part of one page to shut down an entire site.</p>
        <p>These laws go about trying to stop online piracy the wrong way.</p>
        <p><a href='http://americancensorship.org/'>Please help protect free speech.</a></p>
        <p>-Aaron Jorbin</p>
    </div>
    </body>
<?
die();

}
