<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <?php 
        
        
            include "../../Controllers/WorkerController.php";

            $result = new Worker();

            foreach( $result->index() as $data ){
        ?>

                <ul>
                    <li><?php
                        echo $data['nama'];
                    ?></li>
                </ul>

        <?php } ?>
    </div>
</body>
</html>