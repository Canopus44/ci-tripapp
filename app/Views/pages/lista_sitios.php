

      <!-- <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="956" height="403" style="display: block; width: 956px; height: 403px;"></canvas> -->

      <h2>Sitios info</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm table-info-users" id="table-info-users">
          <thead>
            <tr>
              <!-- <th scope="col">#</th> -->
              <th scope="col">Nombre Sitio</th>
              <th scope="col">Municipio</th>
              <th scope="col">Region</th>
              <th scope="col">Departamento</th>              
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listSitios as $sitio) {
            ?>
              <tr>
                <!-- <td><?php echo $sitio->IdLugarTuristico; ?></td> -->
                <td><?php echo $sitio->sitio; ?></td>
                <td><?php echo $sitio->municipio; ?></td>
                <td><?php echo $sitio->region; ?></td>
                <td><?php echo $sitio->departamento; ?></td>                
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
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