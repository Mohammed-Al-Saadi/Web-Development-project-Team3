<?php include 'header.php' ?>

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

      <div class="form-group">
        <p style="font-size:30px;"><b>book your time.</b></p>
        <label class="control-label" for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="control-label" for="email">Email</label>
        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="control-label" for="date">Preferred Date</label>
        <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="control-label" for="time">Preferred Time</label>
        <select id="time" name="time" class="form-control">
          <option value="8:00 to 9:00">8:00 to 9:00</option>
          <option value="9:00 to 10:00">9:00 to 10:00</option>
          <option value="10:00 to 1:00">10:00 to 1:00</option>
        </select>
      </div>
      <!-- Select Basic -->
      <div class="form-group">
        <label class="control-label" for="appointmentfor">Appointment For</label>
        <select id="appointmentfor" name="appointmentfor" class="form-control">
          <option value="Service#1">Service#1</option>
          <option value="Service#2">Service#2</option>
          <option value="Service#3">Service#3</option>
          <option value="Service#4">Service#4</option>
        </select>
      </div>
      <!-- Button -->
      <div class="form-group">
        <button id="singlebutton" name="singlebutton" class="btn btn-default">Make An Appointment</button>
      </div>






    </div>
  </div>


  </div>

  </div>

  </div>
</body>

</html>
<?php include 'footer.php' ?>