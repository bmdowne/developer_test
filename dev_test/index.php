
<?php
include 'includes/call_api.php';
$data = callApi();
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">

   <head>
     <meta charset="utf-8">
     <title>Welcome to DevTest Apartments</title>
     <link rel="stylesheet" href="includes/styles.css">
     <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

   </head>

   <body>

    <section class="navigation">

      <ul class="navbar">
        <li class="nav-item"><a href="#"></a>Resident Portal</li>
        <li class="nav-item active"><a href="index.php"></a>Available Units</li>
        <li class="nav-item"><a href="#"></a>Home</li>
      </ul>

    </section>

    <section class="banner">

      <div class="half-hero flex-center">
        <div class="hero-text">
          <h1 class="hero-title">Welcome to DevTest Apartments</h1>
          <h6 class="credit-to">~Photo by Markus Spiske on Unsplash~</h6>
        </div>
      </div>


    </section>

    <section class="data">

      <div>
        <h3>Available Units</h3>
      </div>

        <button class="accordion">Cozy Floorplans</button>

        <div class="panel cozy">
          <table>
            <tr>
              <th>Unit Number</th>
              <th>Area</th>
              <th>Last Updated</th>
            </tr>
            <?php foreach($data as $apartment): ?>
              <?php if ($apartment->area === 1): ?>
                <tr>
                    <td><?php echo $apartment->unit_number; ?></td>
                    <td><?php echo $apartment->area; ?> (SqFt)</td>
                    <td><?php echo date("m-d-Y", strtotime($apartment->updated_at)); ?></td>
                    <!-- I could also add "h:i a" to the date format string
                    if you want it more specific. -->
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          </table>

        </div>

        <button class="accordion">Spacious Floorplans</button>

        <div class="panel spacious">
          <table>
            <tr>
              <th>Unit Number</th>
              <th>Area</th>
              <th>Last Updated</th>
            </tr>
            <?php foreach($data as $apartment): ?>
              <?php if ($apartment->area !== 1): ?>
                <tr>
                    <td><?php echo $apartment->unit_number; ?></td>
                    <td><?php echo $apartment->area; ?> (SqFt)</td>
                    <td><?php echo date("m-d-Y", strtotime($apartment->updated_at)); ?></td>
                    <!-- I could also add "h:i a" to the date format string
                    if you want it more specific. -->
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>
          </table>

      </div>
    </section>

    <script src="includes/accordions.js" charset="utf-8"></script>

   </body>

 </html>
