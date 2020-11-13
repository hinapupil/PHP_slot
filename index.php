<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Slot Machine</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <main>
    <section class="panel">
      <?php
      if(isset($_POST['spin'])) {
        $image_rand = 'img/slot.gif';
      } else if(isset($_POST['stop'])) {
        $image_rand = array(
          'img/drink_beer.png',
          'img/fruit_budou_kyohou.png',
          'img/fruit_cherry.png',
          'img/fruit_orange.png',
          'img/fruit_suika_red.png',
          'img/money_kasoutsuuka_kusa.png',
          'img/number_7.png',
          'img/seidouki_kane.png',
          'img/tatemono_bar.png',
        );
        $image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];
      } else {
        $image_rand = 'img/number_7.png';
      }
      echo '<img src="'.$image_rand.'" alt="">';
      ?>
    </section>
    <section class="panel">
      <?php
      if(isset($_POST['spin'])) {
        $image_rand2 = 'img/slot2.gif';
      } else if(isset($_POST['stop'])) { 
        $image_rand2 = array(
          'img/drink_beer.png',
          'img/fruit_budou_kyohou.png',
          'img/fruit_cherry.png',
          'img/fruit_orange.png',
          'img/fruit_suika_red.png',
          'img/money_kasoutsuuka_kusa.png',
          'img/number_7.png',
          'img/seidouki_kane.png',
          'img/tatemono_bar.png',
        );
        $image_rand2 = $image_rand2[mt_rand(0, count($image_rand2)-1)];
      } else {
        $image_rand2 = 'img/number_7.png';
      }
      echo '<img src="'.$image_rand2.'" alt="">';
      ?>
    </section>
    <section class="panel">
      <?php
      if(isset($_POST['spin'])) {
        $image_rand3 = 'img/slot3.gif';
      } else if(isset($_POST['stop'])) {
        $image_rand3 = array(
          'img/drink_beer.png',
          'img/fruit_budou_kyohou.png',
          'img/fruit_cherry.png',
          'img/fruit_orange.png',
          'img/fruit_suika_red.png',
          'img/money_kasoutsuuka_kusa.png',
          'img/number_7.png',
          'img/seidouki_kane.png',
          'img/tatemono_bar.png',
        );
        $image_rand3 = $image_rand3[mt_rand(0, count($image_rand3)-1)];
      } else {
        $image_rand3 = 'img/number_7.png';
      }
      echo '<img src="'.$image_rand3.'" alt="">';
      ?>
    </section>
  </main>
    <form action="index.php" method="post">
    <div class="button">
      <div class="spin">
        <button type="submit" name="spin" id="spin">SPIN</button>
      </div>
      <div class="stop">
        <button type="submit" name="stop" id="stop">STOP</button>
      </div>
    </div>
  </form>
    <h1 style="text-align:center" > 
      <?php
      $images = [$image_rand, $image_rand2, $image_rand3];
      if (count(array_unique($images)) == 1) {
        echo 'Congratulations!';
      } else if (isset($_POST['spin'])) {
        echo 'During the rotation......';
      } else {
        echo "Oh no...";
      }
      ?>
    </h1>
</body>
</html>