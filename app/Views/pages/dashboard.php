<div>
    <form action="<?php echo base_url(); ?>/touristicplace/filtrar" method="post">

        <div class="masthead2 global-container mb-1 ">

            <div class="pricing">
                <!-- <div class="pricing-plan">
                    <h3>Departamento</h3>
                    <select class="form-select" aria-label="Default select example" v-model="departamento" name="departamento">
                        <option v-for="dep in departamentos" v:bind="dep">{{dep}}</option>
                    </select>
                </div>
                <div class="pricing-plan">
                    <h3>Región</h3>
                    <select class="form-select" aria-label="Default select example" v-model="region" name="region">
                        <option v-for="reg in regiones" v:bind="reg">{{reg}}</option>
                    </select>
                </div> -->
                <div class="pricing-plan">
                    <h3>Ciudad</h3>
                    <select class="form-select" aria-label="Default select example" name="municipio">
                        <!-- <option v-for="mun in municipios" v:bind="muni">{{mun}}</option> -->
                        <?php
                        foreach ($listMunicipios as $key => $municipio) {
                            echo '<option value="' . $municipio->id . '">' . $municipio->nombre . '</option>';
                        }
                        ?>

                    </select>
                </div>
            </div>

        </div>
        <div>
            <br>
            <br>
            <div class="global-container mx-auto">
                <!-- <h3>
                    Seleccione un metodo de filtro
                </h3> -->
                <h3>
                    <?php
                    echo $mensajeError;
                    ?>
                </h3>
            </div>
            <div class="global-container vh-15 mx-auto">

                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Buscar Sitio</button>

            </div>
        </div>
    </form>
</div>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            <?php
            foreach ($listLugares as $lugar) {
                $uri_image = base_url() . '/uploads/' . $lugar->img1;
            ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="<?php echo $uri_image ?>" alt="Card image cap">
                        <div class="card-body" height="100">
                            <p class="card-text"><h5><?php echo $lugar->Nombre; ?></h5></p>
                            <hr>
                            <p class="card-text"><?php echo $lugar->Descripcion; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <form action="<?php echo base_url(); ?>/touristicplace/verLugar" method="post">
                                        <input type="hidden" id="IdLugarTuristico" name="IdLugarTuristico" value="<?php echo $lugar->IdLugarTuristico; ?>">
                                        <input type="submit" class="btn btn-sm btn-outline-secondary" value="Ver">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>




</div>