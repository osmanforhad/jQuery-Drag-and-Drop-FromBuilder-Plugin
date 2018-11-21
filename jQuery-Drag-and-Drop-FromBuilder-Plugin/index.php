<!DOCTYPE html>
<!--
/*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor. 
    Created on : Nov 18, 2018, 5:02:14 PM
    Author     : osman~Forhad
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
        <!--Include Style Library-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery-ui.css" rel="stylesheet">
        <!--Include JQuery Library-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <!--Include Main Script file-->
        <script src="Script-File/Script_file.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Include Main Style file-->
        <link href="Style-File/Style_file.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-fluid warpper">
            <h1>Drag and Drop Tools Onto Canvas</h1>
            <hr>
            <div class="row" style="position: relative;height: 100%;">
                <div class="col-md-3 tools left_bar">
                    <h2>Tools</h2>
                    <hr>
                    <h3 class="tool tool-1"><input type='text' name='' value='' size="5">Text input</h3>
                    <h3 class="tool tool-2"><input type='password' name='' value='' size="5">Password Field</h3>
                    <h3 class="tool tool-3"><textarea rows='1' cols='3'></textarea>Message/text area</h3>
                    <h3 class="tool tool-4"><input type='checkbox' name='checked' value='checked'>Box</h3>
                    <h3 class="tool tool-5"><input type='radio' name='checked' value='checked'>Button</h3>
                    <h3 class="tool tool-6"><button type="submit" value="Submit">Submit</button>Button</h3>
                </div>
                <div class="col-md-9 canvas panel_body">
                    <h2>Canvas</h2>
                </div>
            </div>
        </div>
    </body>
</html>

