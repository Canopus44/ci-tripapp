<!-- <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="956" height="403" style="display: block; width: 956px; height: 403px;"></canvas> -->

<!-- <h2>Cliente info</h2> -->
<div>
  <form role="form" action="<?php echo base_url(); ?>/touristicplace/insertData" method="post" enctype="multipart/form-data">

    <div class="group">
      <div class="form-group half mb-3">
        <label for="exampleInputName" class="form-control-label"><span class="required-label">*</span> Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Name" name="nombre">
      </div>
      <div class="form-group half mb-3">
        <label for="exampleInputEmail" class="form-control-label"><span class="required-label">*</span> Seleccione Municipio</label>
        <select class="form-select" aria-label="Default select example" name="IdMunLug">
          <?php
          foreach ($listMunicipios as $key => $municipio) {
            echo '<option value="' . $municipio->id . '">' . $municipio->nombre . '</option>';
          }
          ?>
          <!-- <option selected>Open this select menu</option> -->
          <!-- <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option> -->
        </select>
      </div>
      <div class="form-group half mb-3">
        <label for="exampleInputEmail" class="form-control-label"><span class="required-label">*</span> Ubicación</label>
        <input type="text" class="form-control" id="exampleInputEmail" name="ubicacion" placeholder="Ingrese Script de Google">
      </div>
      <div class="form-group half mb-3">
        <label for="exampleInputEmail" class="form-control-label"><span class="required-label">*</span> Video Youtube</label>
        <input type="text" class="form-control" id="exampleInputEmail" name="video" placeholder="Ingrese Script de Youtube">
      </div>
      <div class="input-group mb-3">
        <label class="input-group-text" for="img1">Imagen #1</label>
        <input type="file" class="form-control" id="img1" name="img1">
      </div>
      <div class="input-group mb-3">
        <label class="input-group-text" for="img2">Imagen #2</label>
        <input type="file" class="form-control" id="img2" name="img2">
      </div>
      <div class="input-group mb-3">
        <label class="input-group-text" for="img3">Imagen #3</label>
        <input type="file" class="form-control" id="img3" name="img3">
      </div>
      <div class="input-group mb-3">
        <label class="input-group-text" for="img4">Imagen #4</label>
        <input type="file" class="form-control" id="img4" name="img4">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputComment">Descripción</label>
      <textarea id="Descripcion" class="form-control" rows="10" cols="80" name="descripcion"></textarea>
    </div>

    <input type="submit" class="btn btn-warning mt-3" value="Guardar"></input>
  </form>

</div>
</main>
</div>
</div>

<script>
  var table = document.querySelector('#table-info-users');
  var dataTable = new DataTable(table);
</script>
<!-- <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>