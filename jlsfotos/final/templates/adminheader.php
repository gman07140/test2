<!DOCTYPE html>

<html>

    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>       
        <link href="/css/fstyles.css" rel="stylesheet"/>
        <link href="/css/ftable.css" rel="stylesheet"/>
        <link href="/css/menu.css" rel="stylesheet"/>  
        <link href="/css/flinks.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>CS50 Photography: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50 Photography</title>
        <?php endif ?>
        
        <script src="/java/jquery-1.11.2.min.js"></script>
        <script src="/java/bootstrap.min.js"></script>
        <script src="/java/scripts.js"></script>
        <script src="/java/picsjs.js"></script>
        <script src="/java/jquery.tablesorter.min.js"></script>
        
    </head>

    <body>

        <div class="container">

            <div id="top">
                <img alt="CS50 Photography" src="logopics/banner2.png"/>
            </div>
            <div id = "cssmenu">       
            <ul id="cssmenu">
                <li id="cssmenu"><a href="newclient.php"><strong>Add new client</strong></a></li>
                <li id="cssmenu"><a href="admintable.php"><strong>Client list</strong></a></li>
                <li id="cssmenu"><a href="logout.php"><strong>Log Out</strong></a></li> 
            </ul>                      
            </div>
            </br>

            <div id="middle">
