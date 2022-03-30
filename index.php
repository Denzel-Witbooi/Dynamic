<html>
    <head>
        <title>Dynamic Objects</title>
    </head>
    <body>
    <form action="index.php" method="post">
<?php
    create_button();

    function create_button()
    {
        for($i=1;$i<=10;$i++)
        {
            echo '<input type="submit" 
            name="button['.$i.']" 
            value="BUTTON '.$i.' "
            style=width:250px;height:25px/>';

         }
    }

    //THe if statement runs if the web page has been refereshed
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $x= key($_POST['button']);
        echo "<script>alert('You clicked on button $x');</script>";
    }


?>
    </form>
    </body>
</html>


