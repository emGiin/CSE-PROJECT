<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body style="margin:0 auto;width:80%;">
  <h1>Templating using PHP</h1>
  <ul>
    <?php
    //Get Data from database
    $data = [
      "delectus aut autem",
      "quis ut nam facilis et officia qui",
      "fugiat veniam minus", "et porro tempora",
      "laboriosam mollitia et enim quasi adipisci quia provident illum"
    ];
    foreach ($data as $value) {
      echo '<li>' . $value . '</li>';
    }
    ?>
  </ul>

  <h1 style="margin-top:2em;">Some static text</h1>
  <p>Lorem ipsum dolor sit amet, hendrerit appellantur sea ad. Vix ei simul nonumes singulis, vero idque probatus te mea. Vide quas vitae per ei, ut melius reprehendunt nec. Ius debet dolor an, pri denique interpretaris ei. Rebum elitr repudiandae quo ea, paulo hendrerit consequuntur his ne, cum an alienum intellegam. An eos quaestio inciderint definitiones, enim delectus reprimique an ius.

An nobis quodsi mentitum sit, aperiri ponderum theophrastus vel cu. Mea nullam pericula partiendo ex. Pro quod odio altera eu, modus populo ei eos, dicta legimus lobortis et vis. Adhuc meliore no sit, invidunt verterem quo id, zril vivendo atomorum est ad. Vel id aperiri tamquam mandamus, ex mei oportere persecuti, mel atqui corrumpit accommodare ea. Ridens option fastidii et vel, te sea diam inimicus urbanitas, atqui graeci no duo.</p>

</body>
</html>
