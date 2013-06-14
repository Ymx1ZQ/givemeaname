
<!DOCTYPE html>
<html lang="en">
<?php
$this->view("common/header.php");
?>
<head> 
<meta charset="utf-8"> 
<title>Example of Table with twitter bootstrap</title> 
<meta name="description" content="Creating a table with Twitter Bootstrap. Learn how to use Twitter Bootstrap toolkit to create Tables with examples.">
<link href="/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet"> 
</head>
  <body>


<?php
$this->view("common/navBar.php");
?>
</br></br></br></br></br></br></br></br>
  <div class="container">

      <h1>Contact Us</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Available Time</th>
            <th>Mobile</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Paolo</td>
            <td>general@givemeaname.org </td>
            <td>Mon – Fri, 9am – 5pm, PST time</td>
            <td>+1-800-xxx-xxxx</td>
          </tr>
          <tr>
            <td>Guillermo</td>
            <td>donation@givemeaname.org</td>
            <td>Mon – Fri, 9am – 5pm, PST time</td>
            <td>+1-510-xxx-xxxx</td>
          </tr>
          <tr>
            <td>Celine</td>
            <td>Volunteer@givemeaname.org</td>
            <td>Mon – Fri, 9am – 5pm, PST time</td>
            <td>+1-510-xxx-xxxx</td>
          </tr>
          <tr>
            <td>Neha</td>
            <td>Charityorg@givemeaname.org</td>
            <td>Mon – Fri, 9am – 5pm, PST time</td>
            <td>+1-510-xxx-xxxx</td>
          </tr>
          <tr>
            <td>Alp</td>
            <td>tech@givemeaname.org</td>
            <td>Mon – Fri, 9am – 5pm, PST time</td>
            <td>+1-510-xxx-xxxx</td>
          </tr>
        </tbody>
      </table>
      
     

    </div> <!-- /container -->

   
  </body>
</html>


<?php
$this->view("common/footer.php");
?>
