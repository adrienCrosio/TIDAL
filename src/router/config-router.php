<?php

function generateRoute($router){

    $router::add('/',function(){
        echo 'Welcome :-)';
    });

    $router::add('/home',function(){
        echo 'Welcome home :-)';
    });

    $router::add('/private',function(){
        echo 'Get out !';
    });

    $router::add('/test',function(){
        include('test.tpl');
    });
}