<div>
    <div class="masthead2 global-container mb-1 ">

        <div class="pricing">
            <div class="pricing-plan">
                <h3>Departamento</h3>
                <select class="form-select" aria-label="Default select example" v-model="departamento">
                    <option v-for="dep in departamentos" v:bind="dep">{{dep}}</option>
                </select>
            </div>
            <div class="pricing-plan">
                <h3>Región</h3>
                <select class="form-select" aria-label="Default select example" v-model="region">
                    <option v-for="reg in regiones" v:bind="reg">{{reg}}</option>
                </select>
            </div>
            <div class="pricing-plan">
                <h3>Ciudad</h3>
                <select class="form-select" aria-label="Default select example" v-model="municipio">
                    <option v-for="mun in municipios" v:bind="muni">{{mun}}</option>
                </select>
            </div>

        </div>

    </div>
</div>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
        <form action="<?php echo base_url(); ?>/touristicplace/verLugar" method="post">
            <?php
            foreach ($listLugares as $lugar) {                
                $uri_image = base_url().'/uploads/'.$lugar->img1;
            ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="<?php echo $uri_image ?>" alt="Card image cap">                        
                        <div class="card-body">
                            <p class="card-text"><?php echo $lugar->Descripcion; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <input type="hidden" id="IdLugarTuristico" name="IdLugarTuristico" value="<?php echo $lugar->IdLugarTuristico; ?>">
                                    <input type="submit" class="btn btn-sm btn-outline-secondary" value="Ver">                                   
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            </form>
        </div>
    </div>
</div>




</div>