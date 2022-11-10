<?php
 

 include dirname(dirname(__DIR__)) . "\includes\database\manager.php";

 use database\manager;

 $database = new manager;
 
  function no_search($database){
    $available_properties = $database->disable_prepared_statement()->scalar('select count(id) as num from property')["num"];
    $next = isset($_GET["next"]) ? htmlspecialchars($_GET["next"]) : 1;
     $prev = ($next < 1) ? 0 : $next - 1; 
     $pages = $available_properties / 10;
     $current = $next - 1;
     $next_page  = $current * 10;
   $sql = "select id , name , type , photo as url ,
  price , address from property order by created_at limit $next_page,10";
  $query_result = $database->disable_prepared_statement()->select($sql);
  $properties = "";
  if(empty($query_result)){
        $properties = "sorry no property available";
  } else {
        $template = '
           <a href="../pages/assets.php?id=%s" class="properties-card">

           <div class="properties-image">

               <img src="../assets/images/%s" alt="">

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
     $btn_temp = '<a href="properties.php?next=%s" %s>%s</a>';
     $stop = $current + 3;
     $btns = "";
     for($loop = $current; $loop < $stop ; $loop++){
           $active = ($current == $loop) ? 'class="active"' : "";
           if($loop < $pages){
           $btns .= sprintf($btn_temp , $loop +  1 , $active , $loop + 1);
           }
     }
     $prev_btn = ($prev < 1) ? '' : '
     <a href="properties.php?next=' . $prev .'"><i class="fa-solid fa-angle-double-left"></i></a>
     ';
     $nxt_btn = ($next  > $pages) ? '' : '
     <a href="properties.php?next=' . ($next + 1) .'"><i class="fa-solid fa-angle-double-right"></i></a>
     ';
   $btn = $prev_btn . $btns . $nxt_btn;
   $btn = ($available_properties > 0) ? $btn : " ";
     return [$properties,$btn];
    }

    function buy_or_rent($database){
        $next = isset($_GET["next"]) ? htmlspecialchars($_GET["next"]) : 1;
         $prev = ($next < 1) ? 0 : $next - 1; 
         $current = $next - 1;
         $next_page  = $current * 10;
         $type = isset($_GET["type"]) ? htmlspecialchars($_GET["type"]) : "rent";
         $type = ($type == "buy") ? "sale" : $type;
         $available_properties =  $database->disable_prepared_statement()->scalar("select count(id) as num from property where type = '$type'")["num"];
         $pages = $available_properties / 10;
         $sql = "select id , name , type , photo as url ,
      price , address from property where type = '$type' order by created_at limit $next_page,10";
      $query_result = $database->disable_prepared_statement()->select($sql);
      $properties = "";
      if(empty($query_result)){
        if($type == "sale"){
            $properties = "sorry no property availiable for sale";
        } 
        if($type == "rent"){
            $properties = "sorry no property availiable for rent";
        } 
      } else {
            $template = '
               <a href="../pages/assets.php?id=%s" class="properties-card">
    
               <div class="properties-image">
    
                   <img src="../assets/images/%s" alt="">
    
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
         $btn_temp = '<a href="properties.php?type=%s&next=%s" %s>%s</a>';
         $stop = $current + 3;
         $btns = "";
         for($loop = $current; $loop < $stop ; $loop++){
               $active = ($current == $loop) ? 'class="active"' : "";
               if($loop < $pages){
               $btns .= sprintf($btn_temp , $type , $loop +  1 , $active , $loop + 1);
               }
         }
         $prev_btn = ($prev < 1) ? '' : '
         <a href="properties.php?type=' . $type . '&next=' . $prev .'"><i class="fa-solid fa-angle-double-left"></i></a>
         ';
         $nxt_btn = ($next  > $pages) ? '' : '
         <a href="properties.php?type=' . $type . '&next=' . ($next + 1)  .'"><i class="fa-solid fa-angle-double-right"></i></a>
         ';
       $btn = $prev_btn . $btns . $nxt_btn;
       $btn = ($available_properties > 0  ) ? $btn : " ";
         return [$properties,$btn];
        }
      

        function search($database){
            $type = isset($_GET["type"]) ? htmlspecialchars($_GET["type"]) : "rent";
            $type = ($type == "buy") ? "sale" : $type;
            $city  = isset($_GET["city"]) ? htmlspecialchars($_GET["city"]) : " ";
            $available_properties =  $database->disable_prepared_statement()->scalar("select count(id) as num from property where type = '$type' and address like '%$city%'")["num"];
             $next = isset($_GET["next"]) ? htmlspecialchars($_GET["next"]) : 1;
             $prev = ($next < 1) ? 0 : $next - 1; 
             $pages = $available_properties / 10;
              $current = $next - 1;
             $next_page  = $current * 10;
              $sql = "select id , name , type , photo as url ,
          price , address from property where type = '$type' and address like '%$city%' order by created_at limit $next_page,10";
          $query_result = $database->disable_prepared_statement()->select($sql);
          $properties = "";
          if(empty($query_result)){
            if(empty($type)){
                $properties = "Oops! sorry no property could be located in \"$city\"
                because you did not select the property type"; 
            } else {
                $properties = "sorry no property available in city '$city'";
            }
          } else {
                $template = '
                   <a href="../pages/assets.php?id=%s" class="properties-card">
        
                   <div class="properties-image">
        
                       <img src="../assets/images/%s" alt="">
        
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
             $btn_temp = '<a href="properties.php?type=%s&next=%s" %s>%s</a>';
             $stop = $current + 3;
             $btns = "";
             for($loop = $current; $loop < $stop ; $loop++){
                   $active = ($current == $loop) ? 'class="active"' : "";
                   if($loop < $pages){
                   $btns .= sprintf($btn_temp , $type , $loop +  1 , $active , $loop + 1);
                   }
             }
             $prev_btn = ($prev < 1) ? '' : '
             <a href="properties.php?type=' . $type . '&next=' . $prev .'"><i class="fa-solid fa-angle-double-left"></i></a>
             ';
             $nxt_btn = ($next  > $pages) ? '' : '
             <a href="properties.php?type=' . $type . '&next=' . ($next + 1) .'"><i class="fa-solid fa-angle-double-right"></i></a>
             ';
           $btn = $prev_btn . $btns . $nxt_btn;
              $btn = ($available_properties > 0  ) ? $btn : " ";
             return [$properties,$btn];
            }
         if(isset($_GET["city"]) && isset($_GET["type"])){
            $return_data = search($database);
            $page_data = $return_data[0];
            $nav = $return_data[1];
         } else if(isset($_GET["type"]) && !(isset($_GET["city"])))
         {
            $return_data = buy_or_rent($database);
            $page_data = $return_data[0];
            $nav = $return_data[1];
         } else {
            $return_data = no_search($database);
            $page_data = $return_data[0];
            $nav = $return_data[1];
         }
       