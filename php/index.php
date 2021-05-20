<?php 
    include __DIR__ .'/database.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>
<body>

    <div class="wrapper">

        <div class="container">
            <!-- HEADER -->
            <header>
                <div class="logo">
                    <img src="img/logo-small.svg" alt="logo">
                </div>
            </header>
            <!-- end HEADER -->

            <!-- MAIN -->
            <main>

                <div class="cd-container">                  

                
                    <!-- single cd -->
                    <?php foreach($database as $cd) {?>

                        <div class="cd-box">                            
                                
                            <img src="<?php echo $cd['poster']?>" alt="<?php $cd['title']?>">

                            <div class="title"><?php echo $cd['title']?></div>
                            <div class="author"><?php echo $cd['author']?></div>
                            <div class="year"><?php echo $cd['year']?></div>                            

                        </div>

                    <?php }?>
                    <!-- end single cd -->


                </div>

            </main>
            <!-- end MAIN -->
        </div>
    
    </div>
    
</body>
</html>