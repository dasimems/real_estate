<?php
 

 include dirname(dirname(__DIR__)) . "\includes\database\manager.php";

 use database\manager;

 $database = new manager;

 $sql = "select id , name , type , photo as url ,
  price , address from property order by created_at limit 0,4";
  $query_result = $database->disable_prepared_statement()->select($sql);
  $properties = "";
  if(empty($query_result)){
        $properties = "sorry no property for sale";
  } else {
        $template = '
           <a href="./pages/assets.php?id=%s" class="properties-card">

           <div class="properties-image">

               <img src="./assets/images/%s" alt="">

           </div>

           <h3 class="property-name">%s</h3>

           <h4 class="property-price">%s</h4>

           <p class="location">%s</p>

           <span class="tag %s">%s</span>

       </a>
           ';
       foreach($query_result as $property){
           $data = sprintf($template, $property["id"] , $property["url"],
          $property["name"] , "N" . $property["price"] , 
          $property["address"], $property["type"] , ucfirst($property["type"]));
          $properties .= $data;
       }

  }
 
  
 
 