

<?php

	include ROOT.'/views/layouts/header2.php';
?>
<br>
<br>
<br>



		<section id="category">
      <div class="container">
        <div class="row">
          <!-- Start section Left-Sidebar -->
          <div class="col-sm-3">
            <div class="left-sidebar">
              <h2>Категория</h2>
              <div class="panel-group category-institutions" id="accordian">
                <!-- Start section category-institutions -->
                <!-- Start category Bars -->


                <?php 
              $result = R::find('categorys', 'id >?  ORDER BY sort_order ASC', array(0));
              foreach($result as $value){
              	?>

              	 <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="/category/<?php echo $value->id; ?>">
                        
                        <?php echo $value->name; ?>
                      </a>
                    </h4>
                  </div>
                  
                </div>

              	<?php
				// echo $value->name.'<br>';
			}

              

              	?>



               
              </div>
              
            </div>
          </div>
          <!-- Finish section Left-Sidebar -->

          <!-- Start section Content -->
          <div class="col-sm-9 padding-right">
            <!-- Start section features_items -->
            <div class="features_items">
              <h2 class="title text-center">Результат вашего поиска</h2>
		<?php
function search($words){
	$words = htmlspecialchars($words);
	if($words === "") return false;
	// $guery_search = "";
	// echo $words.'<br>';

	$arraywords = explode(" ", $words);
	foreach ($arraywords as $key => $value) {
		if(!isset($arraywords[$key - 1])){
			$guery_search = ' OR ';

			$guery_search = '`name` LIKE "%'.$value.'%" OR `description` LIKE "%'.$value.'%"';

			// R::exec('SELECT * FROM `bars` WHERE `id` > ?', array(0));
			// $result = R::exec("SELECT * FROM `bars` WHERE $guery_search");
			

              $result = R::find("bars", "id >? AND $guery_search", array(0));
              // echo '<pre>';
              // print_r($guery_search);
              foreach($result as $value){
              	?>

              	 


		              
							<div class="col-sm-4">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="../template/img/institutions/<?php echo $value->img; ?>" width="200" height="200" alt="institutions">
                      <!-- bar.jpg -->
                      <h2><?php echo $value->name ?></h2>
                      <p>
                        <?php echo mb_substr(strip_tags($value->description), 0, 60, 'utf-8') . '...'; ?>
                      </p>
                      <a href="/institution/<?php echo $value->id ?>" class="btn btn-info description">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>



                <?php
				// echo $value->name.'<br>';
			}

              

              	

		}else{
			// echo 'Не сработало';
		}
	}
	
}

if(isset($_POST['send'])){
	$words = $_POST['zapros'];
	search($words);
}


?>

            </div>
            <!-- Finish section features_items -->

          </div>
          <!-- Finish section Content -->
        </div>
      </div>
    </section>

<?php
						include ROOT.'/views/layouts/footer.php';
					?>