!DOCTYPE html 
html
head
  meta charset=utf-8 
  titleBGB - Order confirmationtitle
  style type=textcss
  ol, ul { 
     list-style-type none;
      }
  .eb-garamond-<uniquifier> {
  font-family: "EB Garamond", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
.monsieur-la-doulaise-regular {
  font-family: "Monsieur La Doulaise", cursive;
  font-weight: 400;
  font-style: normal;
}
body {
  background-color: #F8F6F3;
  margin: 10 10%;
  font-family: serif;
  color: #716154
  }
h1 {
  text-align: center;
  font-family: serif;
  font-weight: bold;
  font-size:3em;
  margin-top: 50px;
  margin-left: 700px;
  margin-right: 700px;
  color: #EA7B99;
  background-color: #F9D7DD;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}
h2 {
  color: #F1B1C2;
  font-size: 1.5em;
  margin-top: 50px;
}
h3 {
  color: #F8CBD8;
  font-size: 1.2em;
  font-weight: light;
}
div {
  margin-left: 200px;
}
img.responsive-img {
      width: 100%;
      max-width: 1200px;
      height: auto;
      display: block;
      margin: 1em auto;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }
 nav ul {
      list-style: none;
      padding: 0;
      margin: 20px 0;
      text-align: center;
      background-color: #FFFFFF;
      margin-left: 875px;
      margin-right: 875px;
    }

    nav li {
      display: inline;
      margin: 0 10px;
    }

    nav a {
      text-decoration: none;
      color: #FABFCE;
      font-weight: bold;
      font-size: 1.1em;
    }

    nav a:hover {
      color: #a8492e;
    }
  .button {
      display: block;
      width: fit-content;
      margin: 30px auto;
      padding: 12px 24px;
      background-color: #F690A0;
      color: white;
      font-weight: italic;
      font-size: 1.2em;
      border-radius: 8px;
      text-align: center;
    }

    .button:hover {
      background-color: #E8BDC5;
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

pThanks for your question! We'll get back to you soon!p

h2Your Informationh2
ul
listrongNamestrong php print $_POST['customername']  $_POST['customername']  'ememptyem'; li
listrongAddressstrong php print $_POST['address']  $_POST['address']  'ememptyem'; li
listrongTelephone numberstrong php print $_POST['telephone']  $_POST['telephone']  'ememptyem'; li
listrongEmail Addressstrong php print $_POST['email']  $_POST['email']  'ememptyem'; li
ul
pstrongDelivery instructionsstrong php print $_POST['instructions']  $_POST['instructions']  'ememptyem'; p

h2Your questionh2

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
