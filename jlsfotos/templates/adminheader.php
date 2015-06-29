<!DOCTYPE html>

<html>

    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>       
        <link href="/css/fstyles.css" rel="stylesheet"/>
        <link href="/css/ftable.css" rel="stylesheet"/>
        <link href="/css/menu.css" rel="stylesheet"/>  
        <link href="/css/flinks.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>CS50 Photography: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50 Photography</title>
        <?php endif ?>
        
        <script src="jquery.js"></script>
        <script src="https://cdn.rawgit.com/t4t5/sweetalert/master/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/t4t5/sweetalert/master/dist/sweetalert.css">
    </head>
    <body>
        <div class="container">

            <div id="top">
                <img alt="CS50 Photography" src="logopics/banner2.png"/>
            </div>
            <div id = "cssmenu">       
            <ul id="cssmenu">
                <li id="cssmenu"><a href="vhtml.php"><strong>Add new client</strong></a></li>
                <li id="cssmenu"><a href="admintable2.php"><strong>Client list</strong></a></li>
                <li id="cssmenu"><a href="logout.php"><strong>Log Out</strong></a></li> 
            </ul>                      
            </div>
            </br>
            <div id="middle">