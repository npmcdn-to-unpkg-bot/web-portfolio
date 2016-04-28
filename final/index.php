<?php include'head.php'?>
<body id="home">
<?php include'nav.php'?>

<div class="row">

<form class="form-inline" action="FormToEmail.php" method="post" enctype="multipart/form-data" name="check">
    <fieldset class="form-group">
    <legend>Availability</legend>

    <label class="input-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-5">
    <span class="input-group-addon ">Date:</span>
	<input class="form-control " type="date" name="indate" value="" >
	<span class="input-group-addon "><span class="glyphicon glyphicon-arrow-right"  aria-hidden="true"></span></span>
	<input class="form-control " type="date" name="outdate" value="" >
	</label>

    <label class="input-group col-xs-12 col-sm-4 col-sm-offset-1 col-md-2 col-md-offset-0"><span class="input-group-addon">Guests:</span><input class="form-control" type="number" name="amount" value="" min="1" max="16" placeholder="2" ></label>

    <label class="input-group col-xs-12 col-sm-6 col-md-3">
    <select class="form-control c-select">
      <option selected>Select a room:</option>
      <option value="1">Keeper Dufrain</option>
      <option value="2">Keeper Mcdonald</option>
      <option value="3">Keeper Bergan</option>
      <option value="4">Assistant Beamer</option>
      <option value="5">Assistant Temple</option>
      <option value="6">Helper Fleury</option>
      <option value="7">Helper Brown</option>     
	</select>
    </label>
    
    <label class="input-group-lg col-xs-12">
    <input name="subject" type="hidden" value="Availability check" >
    <input name="redirect" type="hidden" value="book.php">
	<button type="submit" class="submission btn">Check</button>
    </label>
    </fieldset>
</form>  
  
</div> <!-- end row -->


<div class="row">

<div class="card col-xs-12 col-md-6">
<figure class="col-sm-6 col-med-4">
<img src="images/about.jpg" alt="The Big Bay Lighthouse" class="img-fluid card-img">
</figure>
<div class="card-block col-sm-6">
<h3 class="card-title">About</h3>
<p class="card-text">For over a century, mariners have relied on Big Bay Point's light to guide them along this remote and rocky stretch of Michigan coastline. 
</p>
<p class="card-text hidden-xs">Although automated in 1941, the romance and lore of the site are undimmed.</p>
</div><!-- end card block -->
</div> <!-- end about card -->

<div class="card-deck-wrapper col-xs-12 col-md-6">
  <div class="card-deck">
<div class="card col-sm-6">
<figure>
<img class="room-img img-fluid card-img" data-src="images/room.jpg" src="images/room.jpg" alt="Lighthouse room">
</figure>
<div class="card-img-overlay">
<h4 class="card-title text-xs-center text-sm-right text-md-left">Rooms & Rates</h4>
</div>
<div class="card-block">
<p class="card-text hidden-xs text-sm-right text-md-left">Our rooms are named after keepers, assistants, and helpers. </p>
</div>
</div><!-- end card -->

<div class="card col-sm-6">
<figure>
<img class="spec-img img-fluid card-img" data-src="images/special.jpg"  src="images/special.jpg" alt="Lighthouse specials">
</figure>
<div class="card-img-overlay">
<h4 class="card-title text-xs-center text-sm-left">Specials</h4>
</div>
<div class="card-block">
<p class="card-text hidden-xs">Group rates and seasonal discounts for individual rooms.</p>
</div>
</div><!-- end card -->
</div><!-- end card deck -->
</div><!-- end card deck wrap -->

</div> <!-- end row -->

</div> <!-- end container -->

<?php include'footer.php'?>