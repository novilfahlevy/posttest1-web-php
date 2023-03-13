<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Novil Fahlevy's Portfolio</title>

  <?php require './styles.php'; ?>

  <link rel="stylesheet" href="./styles/portfolios.css">
</head>
<body>
  
  <div class="container">
    <?php require './layouts/navbar.php'; ?>

    <!-- Main -->
    <main>
      <div class="portfolios">
        <div class="card">
          <img src="https://novilfahlevy-storage.000webhostapp.com/uploads/kjYrms3v84.png" class="card-img" alt="Dinas Pertanian Kutari Barat">
          <h2 class="card-title">
            Dinas Pertanian Kutari Barat's Profile Website
          </h2>
          <p>
            Dinas Pertanian Kutai Barat web profile.
          </p>
        </div>
        <div class="card">
          <img src="https://novilfahlevy-storage.000webhostapp.com/uploads/38MLirSzkh.png" class="card-img" alt="CasualChase">
          <h2 class="card-title">
            CasualChase
          </h2>
          <p>
            CasualChase is a job and staff finder that allow you to find a right job and for employer to find a right staff.
          </p>
        </div>
        <div class="card">
          <img src="https://novilfahlevy-storage.000webhostapp.com/uploads/uShT1VmnHB.png" class="card-img" alt="Citra99">
          <h2 class="card-title">
            Citra99
          </h2>
          <p>
            CITRA99 is a pawnshop that implements Syariah or Islamic rules in their business.
          </p>
        </div>
      </div>
    </main>
    <!-- End Main -->
  </div>

  <?php require './layouts/footer.php'; ?>

</body>
</html>