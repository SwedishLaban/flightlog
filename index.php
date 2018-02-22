<!DOCTYPE html>
<html>
<?php 
//include and open db connection
include 'db_con.php'; 

//Print head
echo '<head>
            <link rel="stylesheet" type="text/css" href="stylesheet.css">
        </head>';

echo '<body><div id="rcorners2">';

if(!empty($_GET['page']))  {  
    if (!file_exists($_GET['page'].".php") )  
    {  
        include("start.php");  
    }  else  {  
        include($_GET['page'] .".php");  
    }  
    }  else  {  
        include("start.php");  
    } 

echo '</div></body>';

//Close db connection    
$conn->close(); 
?>
</html>