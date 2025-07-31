!DOCTYPE html 
html
head
  meta charset=utf-8 
  titleBGB - Order confirmationtitle
  style type=textcss
  ol, ul { 
     list-style-type none;
      }
  body {  
    background-color #faf2e4;
    margin 0 10%;
    font-family sans-serif;
  }
  h1 {
    text-align center;
    font-family serif;
    font-weight normal;
    text-transform uppercase;
    border-bottom 1px solid #57b1dc;
    margin-top 30px;
  }

  h2 {
    color #d1633c;
    font-size 1em;
  }
  p.disclaimer { 
    border-top 1px solid #d1633c; 
    padding-top 1em;
  }
  style
head

body
  php if (isset($_POST['toppings']) && !is_array($_POST['toppings'])) {
    $toppings_problem = TRUE;
    $toppings = is_string($_POST['toppings'])  $_POST['toppings']  'ememptyem';
  }
  else {
    $toppings_problem = FALSE;
    $toppings = isset($_POST['toppings'])  implode(', ', $_POST['toppings'])  'ememptyem';
  } 
h1Thank you!h1

pThank you for ordering from Black Goose Bistro. We have received the following information about your orderp

h2Your Informationh2
ul
listrongNamestrong php print $_POST['customername']  $_POST['customername']  'ememptyem'; li
listrongAddressstrong php print $_POST['address']  $_POST['address']  'ememptyem'; li
listrongTelephone numberstrong php print $_POST['telephone']  $_POST['telephone']  'ememptyem'; li
listrongEmail Addressstrong php print $_POST['email']  $_POST['email']  'ememptyem'; li
ul
pstrongDelivery instructionsstrong php print $_POST['instructions']  $_POST['instructions']  'ememptyem'; p

h2Your pizzah2

php if (!isset($_POST['crust']) && !isset($_POST['toppings']) && !isset($_POST['pizzas'])) { 
emSorry, we did not receive your information. a href=httpwww.blackgoosebistro.compizza.htmlTry again.aem
php } 
  else { 
    ul
    listrongCruststrong php print isset($_POST['crust']) && $_POST['crust']  $_POST['crust']  'ememptyem'; li
    listrongToppingsstrong php
      print $toppings;
      if ($toppings_problem) { 
        span style=colorredspan
     php } li
    listrongNumberstrong php print isset($_POST['pizzas']) && $_POST['pizzas']  $_POST['pizzas']  'ememptyem'; li
    ul
php  }
if ($toppings_problem) { 
  hr 
  p&nbsp;p
php } 

body
html
