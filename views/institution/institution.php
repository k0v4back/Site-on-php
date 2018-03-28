<?php

$zapros = $_SERVER['REQUEST_URI'];
$end = explode('/', $zapros);
$id_end = $end['2'];
// echo $end['2'];


$category = R::load('bars', $id_end);
// echo '<pre>';
// print_r($category['id']);

// echo $category['id'].'<br>';
// echo $category['name'].'<br>';
// echo $category['description'].'<br>';

?>


<?php

	include ROOT.'/views/layouts/header2.php';

?>
	<style type="text/css">
		.opn-reg {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
}
.opn-bold {
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
}
/* Base colors */
/* Base settigns */
body {
  font-size: 14px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  color: #626262;
  background: #f5f5f5;
}
/* Start section About Institution */
.about_institutionn h2 {
  text-align: center;
  font-size: 5vh;
  margin: 2%;
  color: #fc6744;
}
.about_institutionn p {
  text-align: center;
  font-size: 3vh;
  margin: 2%;
  color: #817eff;
}
.descriptionn p {
  text-align: left;
  border-right: 1px dashed #706b73;
}
.descriptionn-img img {
  width: 100%;
}
.descriptionn-chat h4 {
  text-align: center;
  color: #fc6744;
  font-size: 5vh;
}
.descriptionn-chat p {
  text-align: center;
  font-size: 18px;
  border: none;
}
.descriptionn-chat .btn a {
  color: #ffffff;
  text-decoration: none;
}
.descriptionn-chat-video {
  margin: 3% auto;
  border: 3px solid #706b73;
  min-height: 400px;
  width: 70%;
}

	</style>

	<section id="about_institutionn">
		<div class="container">
			<div class="about_institutionn">
				<div class="row">
					<h2 id="name_institution"><?php echo $category['name']; ?></h2>
				</div>
        <div class="descriptionn">
          <div class="row">
            <div class="descriptionn-img col-lg-8 col-sm-12">
              <img src="../template/img/institutions/<?php echo $category['img']; ?>" alt="institutions">
            </div>
            <div class="descriptionn-text col-lg-4 col-sm-12">
              <p>
                Вид заведения: <?php echo $category['type_of_zaved']; ?> <br>
                Тип кухни: <?php echo $category['type_of_kitchen']; ?> <br>
                Адрес: <?php echo $category['address']; ?> <br>
                Достоинства: <?php echo $category['advantages']; ?><br>
                Телефон: <?php echo $category['phone']; ?><br>
                Директор: <?php echo $category['director']; ?><br>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="descriptionn-author">
              <!-- <blockquote>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, facere, voluptatum. Itaque asperiores ipsam eos dolor, atque, doloribus, voluptatem reiciendis sint praesentium impedit, incidunt."<blockquote>
              <cite>- Иванов Иван</cite> -->
              <h4><?php echo $category['description']; ?></h4>
            </div>
          </div>
          <div class="row">
            <div class="descriptionn-chat text-center">
              <h4>Видеосвязь</h4>
              <p>Здесь Вы можете посмотреть, что происходит в заведении в реальном времени. Для этого нажмите на кнопку.</p>
              <!-- <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Активировать трансляцию</a> -->
              <!-- <div class="descriptionn-chat-video"> -->
              	<br>
              	<br>
              	<br>
                <div>
                  <?php 

                  echo $category['stream'];


                  ?>

                  
                  
                </div>
              	​<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/LPkW26XrHc8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
              	<br>
              	<br>
              	<br>
              <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
		</div>
	</section>

  </body>





<?php
	include ROOT.'/views/layouts/sectionpodder.php';
?>