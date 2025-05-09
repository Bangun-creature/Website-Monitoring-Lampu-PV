<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monitoring-Lamp</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Forum&family=Orbitron:wght@400..900&family=Quicksand:wght@300..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
      $(document).ready(()=>{
        setInterval(()=>{
          $("#firstLampCondition").load("../function/statusFirstLamp.php");
          
        }, 50)
      })
    </script>
  </head>
  <body>
    <main>
      <div class="main-container">
        <div class="main">
          <!-- Tempat gambar -->
        </div>
        <div class="aside">
          <div class="card">
            <h2>Status Lampu 1</h2>
            <div class="battery" id="firstLamp-battery">
              <h3 id="firstLampCondition"></h3>
            </div>
            <div class="vc-status">
              <div class="volt">
                <h3>Voltage : 10V</h3>
              </div>
              <div class="current">
                <h3>Current : 5A</h3>
              </div>
            </div>
          </div>
          <div class="card">
            <h2>Status Lampu 2</h2>
            <div class="battery">
              <h3>OFF</h3>
            </div>
            <div class="vc-status">
              <div class="volt">
                <h3>Voltage : 10V</h3>
              </div>
              <div class="current">
                <h3>Current : 5A</h3>
              </div>
            </div>
          </div>
          <div class="card">
            <h2>Status Lampu 3</h2>
            <div class="battery">
              <h3>OFF</h3>
            </div>
            <div class="vc-status">
              <div class="volt">
                <h3>Voltage : 10V</h3>
              </div>
              <div class="current">
                <h3>Current : 5A</h3>
              </div>
            </div>
          </div>
          <div class="card">
            <h2>Status Lampu 4</h2>
            <div class="battery">
              <h3>OFF</h3>
            </div>
            <div class="vc-status">
              <div class="volt">
                <h3>Voltage : 10V</h3>
              </div>
              <div class="current">
                <h3>Current : 5A</h3>
              </div>
            </div>
          </div>
          <div class="card">
            <h2>Status Lampu 5</h2>
            <div class="battery">
              <h3>OFF</h3>
            </div>
            <div class="vc-status">
              <div class="volt">
                <h3>Voltage : 10V</h3>
              </div>
              <div class="current">
                <h3>Current : 5A</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
