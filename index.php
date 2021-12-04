
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iguassu Invest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>     
    <?php include './inc/header.php'; ?>
    
    <div class="hero"></div>

<?php
        echo "<div class='container'>";


        include './inc/filtroConsultaHome.php';
        echo "<div class='row'>";
       
        foreach ($response->lista as $lista) {

            echo "<div class='col-4 mt-4 padding-0 mix tipo-$lista->codigotipo' data-order='1'>";
            echo "  <div class='card-imoveis'>";
            echo "       <div class='card-imoveis_img__top' style='background-image:url($lista->urlfotoprincipal);'></div>";
            echo "           <div class='card-imoveis_body'>";
            echo "                <h3 class='card-imoveis_card__title'>". mb_strimwidth($lista->fotos[0]->descricao, 0, 39) . "</h5>";
            echo "                     <div class='card-imoveis_text'>";
            echo "                           <p>" . $lista->cidade . "   <img src='../assets/icons/icon-location-on.svg' class='img-responsive card-imoveis_icon__ubication'>" . mb_strimwidth($lista->endereco, 0 , 20) . "</p>";
            echo "                            <p><img src='../assets/icons/icon-shower.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerobanhos . " banheiros <img src='../assets/icons/icon-shower.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->numerosuites . " suites <img src='../assets/icons/icon-bed.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->numeroquartos . " quartos</p>";
            echo "                            <p><img src='../assets/icons/icon-car.svg' class='card-imoveis_icon__left img-responsive'>" .$lista->numerovagas . " vagas <img src='../assets/icons/icon-area-2.svg' class='card-imoveis_icon__shower img-responsive'>" .$lista->areaexterna . " m²  de lote <img src='../assets/icons/icon-area-2.svg' class='card-imoveis_icon__bed img-responsive'>" .$lista->areainterna . " m² construção</p>";
            echo "                      </div>";
            echo "                      <div class='d-flex justify-content-between'>";
            echo "                          <button class='button-more_info'>mais detalhes</button>";
            echo "                          <button class='button-more_agend'>agendar visita</button>";
            echo "                      </div>";
            echo "           </div>";
            echo "    </div>";
            echo "</div>";
            
        }
        echo "</div>";

        echo "";
        echo "</div>";

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../assets/js/mixitup/dist/mixitup.min.js"></script>
<script>
    var mixer = mixitup('.container');

</script>
</body>
</html>