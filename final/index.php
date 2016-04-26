<?php include'head.php'?>
<body id="home">
<?php include'nav.php'?>

<div class="row">

<form class="form-inline">
    <fieldset class="form-group">
    <legend>Availability</legend>

    <label class="input-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-5">
    <span class="input-group-addon datecheck">Date:</span>
	<input class="form-control datecheck" type="date" name="indate" value="" >
	<span class="input-group-addon datecheck"><span class="glyphicon glyphicon-arrow-right"  aria-hidden="true"></span></span>
	<input class="form-control datecheck" type="date" name="outdate" value="" >
	</label>

    <label class="input-group col-xs-12 col-sm-4 col-sm-offset-1 col-md-2 col-md-offset-0"><span class="input-group-addon">Guests:</span><input class="form-control" type="number" name="amount" value="" placeholder="2" ></label>

    <label class="input-group col-xs-12 col-sm-6 col-md-3">
    <select class="form-control c-select">
      <option selected>Select a room:</option>
      <option value="1">Keeper Dufrain</option>
      <option value="2">Keeper Mcdonald</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
	</select>
    </label>
    
    <label class="input-group-lg col-xs-12">
	<button type="submit" class="btn">Submit</button>
    </label>
    </fieldset>
</form>  
  
</div> <!-- end row -->


<div class="row">

<div class="card col-xs-12 col-md-6">
<figure class="col-sm-6">
<img src="images/about.jpg" alt="The Big Bay Lighthouse" class="img-fluid card-img">
</figure>
<div class="card-block">
<h3 class="card-title">About</h3>
<p class="card-text">Ost, sus prem quatem
quia qui nonsendaniet
essitatur
as sit harum veliquo
distiur, con conem
imi, eos modi occupie
nimperat.
</p>
<p class="card-text hidden-xs">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div><!-- end card block -->
</div> <!-- end about card -->

<div class="card-deck-wrapper col-xs-12 col-md-6">
  <div class="card-deck">
<div class="card col-xs-12 col-sm-6 ">
<figure>
<img class="room-img img-fluid card-img" data-src="images/room.jpg" src="images/room.jpg" alt="Lighthouse room">
</figure>
<div class="card-img-overlay">
<h4 class="card-title text-xs-center text-sm-right text-md-left">Check out our rooms</h4>
</div>
<p class="card-text hidden-xs text-sm-right text-md-left">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div><!-- end card -->

<div class="card col-xs-12 col-sm-6 ">
<figure>
<img class="spec-img img-fluid card-img" data-src="images/specials.jpg"  src="images/specials.jpg" alt="Lighthouse specials">
</figure>
<div class="card-img-overlay">
<h4 class="card-title text-xs-center text-sm-left">We have specials!</h4>
</div>
<p class="card-text hidden-xs">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div><!-- end card -->
</div><!-- end card deck -->
</div><!-- end card deck wrap -->

</div> <!-- end row -->

</div> <!-- end container -->

<?php include'footer.php'?>