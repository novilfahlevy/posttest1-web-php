<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Novil Fahlevy's Portfolio</title>

  <?php require './styles.php'; ?>

  <link rel="stylesheet" href="./styles/about-me.css">
</head>
<body>
  
  <div class="container">
    <?php require './layouts/navbar.php'; ?>    

    <!-- Main -->
    <main>
      <div>
        <div class="photo">
          <img
            src="https://novilfahlevy-storage.000webhostapp.com/uploads/ioApPgUNDE.jpeg"
            alt="Novil Fahlevy"
          >
        </div>
      </div>
      <div class="informations">
        <div class="card">
          <h2 class="card-title">
            Bio
          </h2>
          <p>
            A stupid and dumb college student that wants to get better everyday.
          </p>
        </div>
        <div class="card">
          <h2 class="card-title">
            Motto
          </h2>
          <p>
            The more higher your value, the more you will receive.
          </p>
        </div>
        <div class="card">
          <h2 class="card-title">
            Educations
          </h2>
          <ul class="educations">
            <li>
              <p>TK Al-Kautsar Samarinda</p>
            </li>
            <li>
              <p>SD Muhammadiyah 1 Samarinda</p>
            </li>
            <li>
              <p>SMP Negeri 11 Samarinda</p>
            </li>
            <li>
              <p>SMK Negeri 7 Samarinda</p>
            </li>
            <li>
              <p>Universitas Mulawarman</p>
            </li>
          </ul>
        </div>
        <div class="card">
          <h2 class="card-title">
            Skills
          </h2>
          <ul class="skills">
            <li>
              <p>HTML</p>
              <div class="skill-progress-bar">
                <div class="progress" style="width: 90%;"></div>
              </div>
            </li>
            <li>
              <p>CSS</p>
              <div class="skill-progress-bar">
                <div class="progress" style="width: 70%;"></div>
              </div>
            </li>
            <li>
              <p>Javascript</p>
              <div class="skill-progress-bar">
                <div class="progress" style="width: 80%;"></div>
              </div>
            </li>
            <li>
              <p>PHP</p>
              <div class="skill-progress-bar">
                <div class="progress" style="width: 80%;"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </main>
    <!-- End Main -->
  </div>

  <?php require './layouts/footer.php'; ?>

</body>
</html>