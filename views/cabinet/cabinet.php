<?php

$zapros = $_SERVER['REQUEST_URI'];
// echo $zapros.'<br>';
$end = explode('/', $zapros);
// echo $end['2'];

if (array_key_exists("2", $end)) {
    $id_end = $end['2'];
    // echo $id_end.'<br>';

    // $page = 1;
    $offset = ($id_end - 1)*6;
    if($offset == -6){
      $offset = 1;
    }
    // echo $offset;
}else{
    $id_end = 1;
    $end['2'] = 1;

    // echo $id_end.'<br>';

    // $page = 1;
    $offset = ($id_end - 1)*6;
    if($offset == -6){
      $offset = 1;
    }
    // echo $offset;
}






?>


<?php

	include ROOT.'/views/layouts/header2.php';
?>


    <section id="proposal">
      <div class="container">
        <div class="row proposal">
          <div class="col-lg-12">
            <h3><span>Grizzly</span> предлагает Вам найти своё интересное заведение</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Finish section Proposal 
    ============================-->
		
    <!-- Start section Sidebar 
    ===========================-->

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
              <h2 class="title text-center">Предложения</h2>
              <?php 

              $result = R::find('bars', 'id >? ORDER BY id desc LIMIT 9 OFFSET '.$offset, array(0));
              foreach($result as $value){
              	?>

              	<div class="col-sm-4">
                <div class="product-image-wrapper">
                  <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="../template/img/institutions/<?php echo $value->img; ?>" alt="institutions">
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

              

              	?>

              
        
              <ul class="pagination">
                
                <?php

                  if($id_end > 1){
                    ?>

                    <li><a href="<?php echo $end['2'] - 1 ?>">&laquo</a></li>
                    <li><a href="<?php echo $end['2'] + 1 ?>">&raquo;</a></li>
                    

                    <?php
                  }elseif($id_end < 0){
                    ?>

                    
                    <li><a href="<?php echo $end['2'] - 1 ?>">&laquo</a></li>
                    <?php
                  }elseif($id_end > 0){
                    ?>
                    <li><a href="/cabinet/<?php echo $end['2'] + 1 ?>">&raquo;</a></li>
                    

                    <?php
                  }
                ?>

              </ul>
            </div>

          </div>

        </div>
      </div>
    </section>

<?php
						include ROOT.'/views/layouts/sectionpodder.php';
					?>