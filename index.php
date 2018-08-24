<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <!-- Links do BootStrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Link do css -->
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
   <div class="topo">
    <!-- Código de JavaScript do Bootstrap -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Login -->
    <?php
       include 'loginhome.php';
    ?>
    <!-- Fim do Login -->
    <!--- Logo -->
    <?php
       include 'logo.php';
    ?>
    <!-- Fim da Logo -->

    </div>
    <div id="container">
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->
    
    <!-- Banner Carousel --->
    <?php
    include 'carousel.php';
    ?>
    <!-- Fim Banner Carousel --> 
     
    <!-- Menu de Filtro (menu que chama os tipos de personalizações) -->
    <?php
    include 'menudefiltro.php';
    ?>
    <!-- Fim menu de filtro -->
    <div class="largura-site w-90 mt-4">
    <!-- cards -->
    <div class="tab-content container" id="pills-tabContent">
    
    <!-- canecas -->
    <?php
    include 'menucomum.php';
    ?>
    <!-- fim menu 1 -->
      
      <!-- menu 2 -->
     <?php
     include'menumetalizada.php';
     ?>
      <!-- fim menu 2 -->
      
       <!-- menu 3 -->
       <?php
        include 'menucromada.php';
        ?>
       <!-- fim menu 3 -->
     
       <!-- menu 4 -->
        <?php
        include 'menufundo.php';
        ?>
       <!-- fim menu 4 -->
       
       <!-- menu 5 -->
        <?php
        include 'menualca.php';
        ?>
       <!-- fim menu 5 -->
        </div>
<!-- fim do menu -->
    </div>  
    </div>
    <!-- rodapé -->
    <footer class="cor-botao p-4" >
    <div class="botao btn btn bg-white p-0 mr-2">
        <img src="img/social/facebook.png" alt="" >
    </div>
    <div class="btn btn bg-white p-0">
        <img src="img/social/telegram.png" alt="">
    </div>
    </footer>
    
</body>
</html>