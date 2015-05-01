<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Posts</title>
    <style type="text/css" media="screen">

ul{
    display: inline-block;
}

li{
    display: inline-block;
    vertical-align:top;
    border: 1px solid black;
    width: 200px;
    height: 200px;
    margin: 10px;
}

textarea{
    rows: 4;
    cols: 100;
}
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $('form').submit(function(){
                console.log(this.action);
                $.post(this.action, $(this).serialize(), function(res){
                    $('.post').empty();
                    $('#posts').html(res);
                });
                return false;
            });
            $('form').submit();
        });
    </script>
</head>
<body>
   <h2>My Posts</h2> 
    <ul id="posts">
        <li>This is a post</li>
    </ul>
    <form action="/index.php/Posts/create" method="post" accept-charset="utf-8">
        <p>Add a note:</p>
        <p><textarea name="description" value=""></textarea></p>
        <p><input type="submit" value="Post It!"></p>
    </form>
</body>
</html>
