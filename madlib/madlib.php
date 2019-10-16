<?php
$isPost = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $isPost = true;
    $your_travel_status = simple_clean_input($_POST['travelStat']);//travel status
    $your_first_name = simple_clean_input($_POST['firstName']); // first name
    $your_last_name = simple_clean_input($_POST['lastName']); // last name
    $origin_place = simple_clean_input($_POST['placeOfOrigin']); //place of origin
    $your_fave_place = simple_clean_input($_POST['favePlace']); // favorite place
    $planned_budget = simple_clean_input ($_POST['myBudget']);//planned budget
    $travel_distance = simple_clean_input($_POST['travelDistance']); //travel distance
    $transpo_mode = simple_clean_input($_POST['transportMode']); //transportation mode
    $travel_time = simple_clean_input($_POST['travelTime']); //travel time
    
  } //end request method is post

  function simple_clean_input($data) {
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
  return $data;
  }
?>

<!doctype html>
<html class="no-js" lang="">

  <head>
    <meta charset="utf-8">
    <title>Madlib Activity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- custom css -->
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container"> 
      <h1>Tour guide</h1>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <!-- first name -->
        <div class="form-group row">
          <div class="form-check col-lg-4 col-md-6 col-sm-12 col-xs-3">
            <label for="your_name">First Name</label>
            <input class="form-control" type="text" id="your_name" name="firstName" placeholder="Enter your first name" tabindex="1">
          </div>
          <!-- end first name form -->

          <!-- last name -->
          <div class="form-check col-lg-4 col-md-6 col-sm-12 col-xs-3">
            <label for="your_last_name">Last Name</label>
            <input class="form-control" type="text" id="your_last_name" name="lastName" placeholder="Enter your last name" tabindex="2">
          </div>
          <!-- end last name form -->

          <!-- place of origin  -->
          <div class="form-check col-lg-4 col-md-6  col-sm-12 col-xs-3">
            <label for="origin_place">Place of origin</label>
            <input class="form-control" type="text" id="origin_place" name="placeOfOrigin" placeholder="Enter your origin point" tabindex="3">
          </div> 
          <!-- end of place of origin form -->

          <!-- fave place -->
          <div class="form-check col-lg-4 col-md-6  col-sm-12 col-xs-3">
            <label for="your_fave_place">Favorite place</label>
            <input class="form-control" type="text" id="your_fave_place" name="favePlace" placeholder="Enter your favorite place" tabindex="4">
          </div>
          <!-- end fave place form -->
          
          <!-- transportation mode -->
          <div class="form-check col-lg-4 col-md-6  col-sm-12 col-xs-3">
            <label for="your_transportation">Transport mode</label>
            <select class="form-control form-control" name="transportMode" id="your_transportation" tabindex="5">
              <option value="">(please select)</option> <!-- default -->
              <option value="airplane">Airplane</option>
              <option value="autodoor jeepney">Autodoor jeep</option>
              <option value="bus">Bus</option>
              <option value="Grab">Grab</option>
              <option value="jeepney">Jeepney</option>
              <option value="taxi">Taxi</option>
              <option value="tricyle">Tricycle</option>
              <option value="UV Express">UV Express</option>
            </select>
            <small id="transpoMode" class="form-text">Recommended transportation</small>
          </div>
          <!-- end transportation form -->

          <!-- travel distance -->
          <div class="form-check col-lg-4 col-md-6  col-sm-6 col-xs-3">
            <label for="travel_distance">Travel distance</label>
            <input type="number" step="0.01" min="0" class="form-control form-control" name="travelDistance" id="travel_distance" placeholder="Enter travel distance" tabindex="6" style="width: 12rem;">
            <small id="distanceKilometer" class="form-text">In kilometers</small>

          </div>
          <!-- end travel time form -->
      

          <!-- travel time -->
          <div class="form-check col-lg-4 col-md-6  col-sm-6 col-xs-3">
            <label for="travel_time">Travel time</label>
            <select class="form-control form-control" name="travelTime" id="travel_time" style="width: 12rem;" tabindex="7">
              <option value="">(please select)</option>
              <option value="1 hour or less">0–1 hour</option>
              <option value="1 to 2 hours">1–2 hours</option>
              <option value="2 to 4 hours">2–4 hours</option>
              <option value="4 to 8 hours">4–8 hours</option>
              <option value="8 to 12 hours">8–12 hours</option>
              <option value="12 hours or more">12 hours or more</option>
            </select>
          </div>
          <!-- end travel time form -->

           <!-- planned budget -->
           <div class="form-check col-lg-4 col-sm-6 col-md-6 col-xs-3">
            <label for="planned_budget">Planned budget</label>
            <select class="form-control form-control" name="myBudget" id="planned_budget" style="width: 12rem;" tabindex="8">
              <option value="">(please select)</option>
              <option value="less than ₱1,500">less than ₱1,500</option>
              <option value="₱1,500–₱3,000">₱1,500–₱3,000</option>
              <option value="₱3,000–₱5,000">₱3,000–₱5,000</option>
              <option value="₱5,000–₱7,000">₱5,000–₱7,000</option>
              <option value="₱7,000–₱10,000">₱7,000–₱10,000</option>
              <option value="₱10,000 or more">₱10,000 or more</option>
            </select>
            <small id="budgetMode" class="form-text">The planned budget for the trip</small>
          </div>
          <!-- end planned budget form -->

          <!-- radio box -->
          <div class="form-check col-lg-4 col-sm-12 col-xs-3">
            <label for="travel_status">Status</label>
            <div class="radio-inline">
              <!-- male radio -->
              <input class="radio-inline" type="radio" name="travelStat" id="first-timer" tabindex="9" value="first time traveler" checked>
              <label class="radio-inline" for="first-stat">First time traveler</label>
         
              <!-- female radio -->
              <input class="radio-inline ml-sm-3 ml-md-1" type="radio" name="travelStat" id="seasonal-traveler" value="seasoned traveler" tabindex="10">
              <label class="radio-inline" for="season-stat">Seasonal traveler</label>
            </div> <!-- end form check div -->
          </div> 
          <!-- end radio box form -->
          <button type="submit" class="mt-4 mx-auto col-lg-2 col-md-4 col-sm-6 btn btn-primary">Guide me!</button>
        </div> <!-- end of form-group -->
      </form> <!-- end of form -->
    </div> <!-- end container div -->
    
    <!-- start of story mode  -->
    <div class="container text-align-center story-container">
      <h2 style="font-family: 'Verdana';">Welcome aboard!</h2>
      <p style="font-family: 'Trebuchet MS';">
        <?php
          if ($isPost) {
            // if one or more fills are not filled
            if (($your_first_name == "") || ($your_last_name == "") || ($origin_place == "") || ($your_fave_place == "") || ($transpo_mode == "") || ($travel_distance == "") || ($travel_time == "") || ($planned_budget == ""))
            {
              echo "<b>Please fill all the information before we start.</b>";
            }
            else
            {
            echo "I am <b>".$your_first_name." ".$your_last_name."</b>, your tour guide for today! Are you a <b>".$your_travel_status."</b>? If you are new here, I would highly recommend you to travel to <b>".$your_fave_place."</b> because I always love to travel there. The recommended mode of transportation  for you is a/an <b>".$transpo_mode."</b> in order to visit there. If you are from <b>".$origin_place."</b> going to <b>".$your_fave_place."</b>, the distance between these two places are about <b>".$travel_distance." kms</b>, and the approximate travel time is <b>".$travel_time.".</b> If you want to make the most out of your experience there, make sure that you have a budget plan for the entire trip in order for you to buy freebies or pasalubong like clothes, souvenirs, food, and others. like clothes, souvenirs, food, and others. My recommended budget plan there is <b>".$planned_budget."</b>. So you will have an enjoyable stay at <b>".$your_fave_place."</b> because it is a place of cultural and natural wonders, and will be a worthy addition to your travel goals for a second/multiple time around! Thank you for choosing me as your tour guide for today! Hope to see you soon!"; // thanks to a girl who makes this reading more comfortable :D
            }
          } // end if for post

          else {
            echo "The session will start soon.";
          } // end else
        ?>   
      </p>  
    </div> <!-- end story telling div -->
  </body>
</html>