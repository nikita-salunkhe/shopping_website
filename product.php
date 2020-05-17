 <?php
session_start();
/*echo $_SESSION['pname'];
echo $_SESSION['sprice'];
echo $_SESSION['eprice'];*/

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://price-api.datayuge.com/api/v1/compare/search?api_key=FesFoDCVzzZ6q7CE6QV4hlV0dkuLEEREKyo&product=".$_SESSION['pname']."&price_start=".$_SESSION['sprice']."&price_end=".$_SESSION['eprice']."&page=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:".$err;
} else {

  $url = "https://price-api.datayuge.com/api/v1/compare/search?api_key=FesFoDCVzzZ6q7CE6QV4hlV0dkuLEEREKyo&product=".$_SESSION['pname']."&price_start=".$_SESSION['sprice']."&price_end=".$_SESSION['eprice']."&page=1"; // path to the JSON file
  $array = file_get_contents($url);
  $i = json_decode($array,true);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<!-- Navigation bar-->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo.png" width="70" height="70" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
        <a class="nav-link" href="#" data-target="#mymodel" data-toggle="modal">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>

<main>
<div class="main_s">
</br>
</br>
      <div class="container-fluid">
    <?php for($k=0 ; $k< count($i['data']) ;$k++)
       { ?>

      <div class="row">
        <div class="col-sm-1 col-md-1 bg-sucess"></div>
        <div class="col-sm-2 col-md-2 bg-sucess">
        <!-- card -->
        <div class="container-fluid padding">
          <div class="row padding">
              <div class="card">
                <img class="card-img-middle" src="<?php echo $i['data'][$k]['product_image']; ?>" height="200">
              </div>
          </div>
        </div>
        <br>
        </div>
        <div class="col-sm-6 col-md-6 bg-sucess">
          <?php
          echo "</br>";

          echo $i['data'][$k]['product_title']."<br>";
          echo " Price: Rs ".$i['data'][$k]['product_lowest_price']."<br>";
          echo "Rating: ".$i['data'][$k]['product_rating']."<br>";
          echo "link: ".$i['data'][$k]['product_link']."<br>";
          echo "id: ".$i['data'][$k]['product_id']."<br>";
          echo "<br>";
          ?>
        </div>
        <div class="col-sm-2 col-md-2 bg-sucess">
        <form action="" method="post" name="login">
        <a class="btn btn-info" href="shop.php?product_id=<?php echo $i['data'][$k]['product_id']; ?> &image=<?php echo $i['data'][$k]['product_image'];; ?>">More Details...</a>
      </form>
      </div>
        <div class="col-sm-1 col-md-1 bg-sucess"></div>
      </div>
      <br>
    <?php
  }
    ?>
    </div>
  </div>
</main>
  </body>
  </html>
