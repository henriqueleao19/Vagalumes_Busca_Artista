<?php include('./pesquisaMusica.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vagalume</title>

    <!--     Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--    MY.CSS-->
    <style>
        html {

            background-color: #90EE90;
        }

        body {
            background-color: #ffffff;
        }

    </style>

</head>

</head>

<body>
    <div class="container">
        
        

<div class="row m-1 p-1">
    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
        <div class="text-center">
           <a href= "http://localhost/Vagalumes_Busca_Artista-master/MusicasFinal/"> <img src="vagalume.png" class="img-fluid" width=600px height="auto" alt=""></a>
        </div>
        <hr>
    </div>
    
</div>

<div class ="row">
<div class ="col">

            <?php
        
        if (!empty($music)) {
          foreach ($music->mus as $mus) {          
          ?>
          <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Letra</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Tradução</button>
  
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <h1><?php echo $mus->name ?></h1>
            <p class="text-justify" >
                <?php echo $mus->text ?>
            </p>
       
            </div> 
      </div>
    </div>
  </div>
          
            
           
            


            <hr>

           
  
  
  
  <div class ="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      <h1 >
    Tradução
  </h1> 
          <p class="text-md-left"> <?php echo $mus->translate[0]->text ?></p></div> </div> 
      </div>
    </div>
  </div>
</div>
 
            
            <?php
          }
        }
      ?>
      </div>
       

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>
