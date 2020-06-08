<?php
require_once 'confige.php';
include "add.php";
 $n=1;

$database = new Database();

$items=$database->ItemQuery();

?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <link rel="stylesheet" href="style.css" type="text/css" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <title></title>


 
</head>
    
<body>
  <div id="page-wrap">
    <div id="header">
      <h1><a href="">PHP Sample Test App</a></h1>
    </div>

    <div id="main">
      <noscript>This site just doesn't work, period, without JavaScript</noscript>
       <div id='response'></div>
    
    <?php if(!empty($items)): ?>
    <ul id="list" class="sortable listitems ui-sortable">

    <?php 
    
    foreach ($items as $item): 
        {
         $n = $item->itemPosition;
         if(empty($n)){
          $n=1;
         }
        }
     ?>


          <li id="<?php echo $item->Id;?>" color="1" class="<?php echo $item->listColor ?>" data-position="<?php echo $item->itemPosition?>">
          <span id="7listitem" class="changed <?php echo $item->isdone ? ' isdone' : '' ?>" title="Double-click to edit..."><?php echo $item->description; ?></span>

          <div class="draggertab tab"></div>

          <div id="color_tab" class="colortab tab"></div>
          <a class="delete" href="data.php?item=<?php echo $item->Id;?>">
          <div class="deletetab tab"></div>
          </a>
          <a href="data.php?mark_id=<?php echo $item->Id; ?>">
          <div class="donetab tab"></div>
        </a>
        </li>

        <?php $n=$n+1;  endforeach;
        ?>
    </ul>
    <?php else:?>
      <p>You Haven't added any items yet.</p>
    <?php  endif; ?>

   
   
      <form  action="data.php?n=<?php echo $n?>" id="add-new" method="post">
        <input type="text" id="new-list-item-text" name="name" />
        <input type="submit" name="add" id="add-new-submit" value="Add" class="button" />
      </form>
      

      <div class="clear"></div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script  src="function.js"></script>

<script type="text/javascript">
 
</script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
