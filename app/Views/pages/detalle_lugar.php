<div class="masthead2 global-container mb-1 ">

    <?php


    $info = $infoLugar;
    $uri_image1 = base_url() . '/uploads/' . $infoLugar[0]->img1;
    $uri_image2 = base_url() . '/uploads/' . $infoLugar[0]->img2;
    $uri_image3 = base_url() . '/uploads/' . $infoLugar[0]->img3;
    $uri_image4 = base_url() . '/uploads/' . $infoLugar[0]->img4;

    ?>

    <div class="row container pricing-plan">
        <div class="text-center">
            <h3><?php echo $infoLugar[0]->Nombre ?></h3>
        </div> </br>
        <div class="col">
            <p class="lead"><?php echo $infoLugar[0]->Descripcion ?></p>
        </div>

        <div class="col">

            <!-- Carrusel de imagenes -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $uri_image1 ?> " class="d-block w-100" data-bs-interval="10000" alt="<?php echo $uri_image1 ?>" width="200" height="400">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $uri_image2 ?>" class="d-block w-100" data-bs-interval="2000" alt="<?php echo $uri_image2 ?>" width="200" height="400">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $uri_image3 ?>" class="d-block w-100" data-bs-interval="2000" alt="<?php echo $uri_image3 ?>" width="200" height="400">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $uri_image4 ?>" class="d-block w-100" alt="<?php echo $uri_image4 ?>" width="200" height="400">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Fin Carrusel de imagenes -->

            </br>
            <div width="300" height="400">
                <?php
                if (!empty($infoLugar[0]->video)) {
                    echo $infoLugar[0]->video;
                }
                ?>
            </div>
            <div width="300" height="400">
                <?php
                if (!empty($infoLugar[0]->ubicacion))
                    echo $infoLugar[0]->ubicacion;
                ?>
            </div>
            </br>


        </div>
    </div>


</div>