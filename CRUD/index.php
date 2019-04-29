<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->


      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="insert.php" method="POST">
          <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="latitude" class="form-control" placeholder="Latitud" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="longitude" class="form-control" placeholder="Longitud" autofocus>
          </div>
          <input type="submit" name="submit" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Usuario</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM location";

          $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
          
          $result_tasks = mysqli_query($con, $query);

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lat']; ?></td>
            <td><?php echo $row['lon']; ?></td>
            <td><?php echo $row['time']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
