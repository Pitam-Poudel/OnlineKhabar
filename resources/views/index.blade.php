<?php
function bigPost($title, $author, $img, $text)
{
?>
    <div class=" my-3">
        <a href="">
            <h1 class="w-100 text-center">
                <?php echo $title ?>

            </h1>
        </a>
        <div class="row justify-content-center">
            <p class="small text-muted mr-4 " style="line-height: 30px; text-align:center"> <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/okAuthor.png" style="height: 30px;" class="img-fluid mr-2"><?php echo $author ?>
            </p>
            <p class="small text-muted mr-4 " style="line-height: 30px; text-align:center"><i class="fa fa-clock mr-2"></i>३६ मिनेट अगाडि</p>
            <p class="small text-muted  mr-4" style="line-height: 30px; text-align:center"> <i class="fa fa-comment-alt mr-2"></i>0</p>
        </div>
        <img src=<?php echo $img ?> class="w-100" alt="">
        <h4 class="text-muted w-100 text-center mt-4"><?php echo $text ?></h4>
    </div>

    <hr class="my-5">
<?php } ?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
    .bg-primary {
        background-color: #0e5dae !important;
    }

    .bg-primary-light {
        background-color: #007cba !important;
    }


    a:hover {
        text-decoration: none;

    }

    a {

        text-decoration: none;
    }
  
</style>
  <title>Online Khabar – No 1 News Portal from Nepal in Nepali.</title>

</head>

<body>
@include('header')
  <div class="container">
    <?php 
    bigPost("‘१० मिटर वर रोकियौं र सबैजना एकसाथ केटुको चुचुरोमा पुग्यौं’", "निर्मल पूर्जा ,टीम लिडर, माउण्ट केटु आरोहण", "https://www.onlinekhabar.com/wp-content/uploads/2021/01/nirmal-purja-1.jpg", "राति एकदमै जाडो थियो, त्यो अहिले म शब्दमा व्यक्त गर्न सक्दिनँ । केही साथीहरू अब यतैबाट फर्किने कि भन्ने सोचमा पनि थिए । माइनस ६५ डिग्री सेल्सियस तापक्रम थियो । हामी त्यसबेला माउन्ट केटुको क्याम्प-३ मा थियौं । समिट हुने हो वा नहुने भन्ने निश्चित थिएन । त्यसबेला दुःख कति थियो, त्यो म कसरी भनौं […]");
    bigPost("किन बढ्दैछ हत्यापछि आत्महत्याका घटना ?", "गौरव पोखरेल", "https://www.onlinekhabar.com/wp-content/uploads/2021/01/Mass-Murder.jpg", "१२ माघ, काठमाडौं । ललितपुरको लुभुमा डेरा गरी बस्ने सप्तरीका ३२ वर्षीय सागर पोखरेल र उनकी श्रीमती २२ वर्षीया निर्मला अघिल्लो साताको सोमबार मृत भेटिए । बन्द कोठाभित्र लडिरहेको शव नजिकै ‘सल्फस’ विषादीको बट्टा बरामद भयो । दुवैजनाले आत्महत्या गरेको प्रहरीको प्रारम्भिक अनुमान छ । महानगरीय प्रहरी परिसर, ललितपुरले घटनामा सागर र निर्मलाको मृत्युबीच फरक […]");
    bigPost("पूर्वसभामुख ढुंगानाविरुद्ध अदालतको अवहेलना मुद्दा दर्ता", "अनलाइनखबर", "https://www.onlinekhabar.com/wp-content/uploads/2021/01/Damannath-dhungana.jpg", "१३ माघ, काठमाडौं । पूर्वसभामुख दमननाथ ढुंगानाविरुद्ध सर्वोच्च अदालतमा अदालतको अवहेलना मुद्दा दर्ता भएको छ । राजाराम घिमिरेसहित ४ जनाले ढुंगानाविरुद्ध दिएको अवहेलना मुद्दा सर्वोच्च प्रशासनले दर्ता गरेको हो । ढुंगानाले केही दिनअघि न्यायाधीशविरुद्ध आपत्तिजनक टिप्पणी गरेको भन्दै उनीहरुले अवहेलना मुद्दा दर्ता गरेको बताएका छन् ।"); ?>

  </div>

@include('footer')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/25a17204e6.js" crossorigin="anonymous"></script>
</body>

</html>