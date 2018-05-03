<?php $this->beginBlock('block1');  ?>
        <h1>Заголовок сторінки</h1>
    <?php $this->endBlock(); ?>
<h1>Show ACTION</h1>

<?php //foreach ($cats as $cat){
//    echo $cat->title.'<br>';
//} ?>
<?php // debug($cats) ?>
<?php // echo count($cats->products)?>
<!---->
<?php // debug($cats) ?>

<?php

foreach ($cats as $cat) {
        echo '<ul>';
            echo '<li>'.$cat->title . '</li>';
            $products = $cat->products;
            foreach ($products as $product){
                echo '<ul>';
                    echo '<li>'.$product->title.'</li>';
                echo '</ul>';
            }


        echo '</ul>';
    }



?>





<button class="btn btn-success" id="btn">Click me</button>

<?php
    $js =    <<< JS
    $('#btn').on('click', function() {
        $.ajax({
        url:'index.php?r=post/index',
        data: {test:'123'},
        type: 'GET',
        success:function(res){
            console.log(res);
        },
        error: function(){
            alert('Error!');
        }
        });
      
    }  );
 
JS;
$this->registerJs($js);
?>