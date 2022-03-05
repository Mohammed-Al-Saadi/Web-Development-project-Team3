<?php
include 'header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/ bootstrap.min.css" rel="stylesheet" integrity="sha384 +0n0xVW2eSR500mGNYDnhZAbDs0XxcvSN1TPpr VMTNDbiYZCxYb0017+AMvYTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="index2.css">
  <title>Document</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#date").datepicker({
                minDate: 0
            });
        });
    </script>
</head>

<body>

  <div class="row row1">
    <div class="col-lg-12">
      <article>
        <h1>Services we provide:</h1>

        <p>Etiam viverra vel magna aliquet maximus.
          Vestibulum non nulla auctor, condimentum massa nec, ornare orci.
          Aenean sed purus et quam semper mollis vel eu enim.
          Aliquam sagittis semper ante sit amet Phasellus non fringilla ante.
          Etiam viverra vel magna aliquet maximus.
          Vestibulum non nulla auctor, condimentum massa nec, ornare orci.
          Aenean sed purus et quam semper mollis vel eu enim.
          Aliquam sagittis semper ante sit amet Phasellus non fringilla ante.
          Etiam viverra vel magna aliquet maximus.
          Vestibulum non nulla auctor, condimentum massa nec, ornare orci.
          Aenean sed purus et quam semper mollis vel eu enim.
          Aliquam sagittis semper ante sit amet Phasellus non fringilla ante.</p>

      </article>




    </div>


  </div>
  <!--data-bs-interval:amount of time to delay between automatically cycling to the next item. First slide.  ,data-bs-ride:animating starting at page load. delay-->
  <div class="row row2">
    <h2>Our Services:</h2>
    <div id="carouselmain" class="carousel slider" data-bs-interval="5000" data-bs-ride="carousel">

      <!-- indicators to see how many items we have in the slider, aria-current attribute indicates the element on which it is set, to a value other than false
        
        -->

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"> </button>
        <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"> </button>
        <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3"> </button>
        <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="3" aria-current="true" aria-label="Slide 4"> </button>
        <button type="button" data-bs-target="#carouselmain" data-bs-slide-to="4" aria-current="true" aria-label="Slide 5"> </button>


      </div>

      <!-- inside carusel -->
      <div class="carousel-inner">
        <div class="carousel-item active">

          <img src="cor1.jpg " class="firstslide" alt="slide 1">

          <div class="carousel-caption">
            <h3>Etiam viverra .</h3>

          </div>
        </div>
        <div class="carousel-item ">
          <img src="cor2.jpg" class="firstslide" alt="slide 2">
          <div class="carousel-caption">
            <h3>Etiam viverra vel .</h3>

          </div>

        </div>
        <div class="carousel-item ">
          <img src="cor3.jpg" class="firstslide" alt="slide 3">
          <div class="carousel-caption">
            <h3>Etiam viverra vel magn.</h3>

          </div>

        </div>
        <div class="carousel-item ">
          <img src="cor2.jpg" class="firstslide" alt="slide 4">
          <div class="carousel-caption">
            <h3>Etiam viverra vel magna aliquet.</h3>

          </div>

        </div>
        <div class="carousel-item ">
          <img src="cor1.jpg" class="firstslide" alt="slide 5">
          <div class="carousel-caption">
            <h3>Etiam viverra vel magna aliquet maximus.</h3>

          </div>

        </div>



      </div>




      <!--data-bs-slide: accepts the keywords prev or next  The aria-hidden: attribute can be used to hide non-interactive content from the accessibilit-->
      <button class="carousel-control-prev color " type="button" data-bs-target="#carouselmain" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselmain" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
    </div>




  </div>
  <div class="row row3">
    <div class="col-lg-12">
<form action="#" method="post">
    <div class="form-group">
                        <label class="control-label" for="email">EmailID</label>
                        <input id="email" name="username" type="text" placeholder="E-Mail" class="form-control input-md" required>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="date">Date</label>
                        <input required type="text" name="date1" id="date" class="form-control input-md" value="date" required>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="control-label" for="time">Time</label>
                        <select id="time" name="tim" placeholder="Time" class="form-control" required>
                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                            <option value="10:00 to 11:00">10:00 to 11:00</option>
                            <option value="11:00 to 12:00">11:00 to 12:00</option>
                            <option value="12:00 to 13:00">12:00 to 13:00</option>
                            <option value="14:00 to 15:00">14:00 to 15:00</option>
                            <option value="15:00 to 16:00">15:00 to 16:00</option>
                            <option value="16:00 to 17:00">16:00 to 17:00</option>

                        </select>
                    </div>
                    <!--Select Basic-->
                    <div class="form-group">
                        <label class="control-label" for="gender">Gender</label>
                        <select id="gender" name="gender" placeholder="Gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="control-label" for="Services">Services</label>
                        <select id="services" name="service" placeholder="Select Service" class="form-control" required>
                            <option value="Service#1">Service#1</option>
                            <option value="Service#2">Service#2</option>
                            <option value="Service#3">Service#3</option>
                            <option value="Service#4">Service#4</option>
                        </select>
                    </div>
                    <!-- Button -->
                    <div class="form-group form1">
                        <button type="submit" class="btn btn-primary" name="submit">Add appointment</button><br>
                        <?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $date1 = $_POST['date1'];
    $gender = $_POST['gender'];
    $service = $_POST['service'];
    $tim = $_POST['tim'];
    $sql = "insert into appointment (username,date1,gender,service,tim)  value('$username','$date1','$gender','$service','$tim')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      
        echo "Appointment saved.";
    }
     else 
    {
echo "Please check your info.";    }
}

?>
                    </div>

      </form>





    </div>
  </div>


  </div>

  </div>

  </div>
</body>

</html>
<?php include 'footer.php' ?>