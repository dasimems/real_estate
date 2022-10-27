<?php
//the contact form backend

 $nameErr = $emailErr = $msgErr = "";
//check if the form has been submitted
if(isset($_POST["submit"]))
{
      $template_error = '<div class="error-box"><p>%s</p></div>';
      $name = $email = $message = " ";
      $nameOk = $emailOk = $msgOk = false;
      if(isset($_POST["name"])){
         $name = trim(htmlspecialchars($_POST["name"]));
         if(empty($name)){
                $nameErr = sprintf($template_error , "name can not be empty");
         }
         else if(!validate_name($name)){
            $nameErr = sprintf($template_error , 'only letters and whitespace allowed');
         } 
         else {
                $nameOk = true;
         }
      }
      if(isset($_POST["email"])){
        $email = trim(htmlspecialchars($_POST["email"]));
        if(empty($email)){
               $emailErr = sprintf($template_error , "email address can not be empty");
        }
        else if(!validate_email($email)){
           $emailErr = sprintf($template_error , 'your email address is invalid');
        } 
        else {
               $emailOk = true;
        }
     }
     if(isset($_POST["message"])){
        $message = trim(htmlspecialchars($_POST["message"]));
        if(empty($message)){
               $msgErr = sprintf($template_error , "please type in your message");
        }
        else {
               $msgOk = true;
        }
     }
     if(!($nameOk && $emailOk && $msgOk))
     {
         contact($name,$email,$message);
     }
}

 

 function validate_name($name){
      return preg_match("/^([A-Za-z\s]+)$/" , $name);
 }

 function validate_email($email){
  return filter_var($email , FILTER_VALIDATE_EMAIL);
 }
 
 function contact($name,$email,$message)
 {
      
 }
 
?>