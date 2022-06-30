<html>
    <head>
        <title> PHP Form handling
        </title>

    </head>
    <body>
        <?php 
        pre_r($_POST);
        pre_r($_GET);
        if (isset($_POST['submit'])){
            echo "First name:" . $_POST['firstname'] . '<br/>';
            echo "Last name:" . $_POST['lastname'] . '<br/>';
        }
        ?>
        <form action="" method="POST">
            <p>First name: <input type="text" name="firstname" value=""></p>
            <p>Last name: <input type="text" name="lastname" value=""></p>
            <input type="submit" name="submit" value="Submit">
        
        </form>
        <form action="" method="GET">
            <p>First name: <input type="text" name="firstname" value=""></p>
            <p>Last name: <input type="text" name="lastname" value=""></p>
            <input type="submit" name="submit" value="Submit">
        
        </form>
    </body>
</html>

<?php 

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}