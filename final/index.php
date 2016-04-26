<?php include'head.php'?>
<body id="home">
<?php include'nav.php'?>

<form class="form-inline">
<div class="row">
    <fieldset class="form-group">
    <legend>Availability</legend>

    <label class="input-group col-xs-12 col-sm-12 col-md-5">
    <span class="input-group-addon">Date:</span>
	<input class="form-control" type="date" name="indate" value="" >
	<span class="input-group-addon"><span class="glyphicon glyphicon-arrow-right"  aria-hidden="true"></span></span>
	<input class="form-control " type="date" name="outdate" value="" >
	</label>

    <label class="input-group col-xs-12 col-sm-5 col-md-2"><span class="input-group-addon" id="sizing-addon3">Guests:</span><input class="form-control" type="number" name="amount" value="" placeholder="2" ></label>

    <label class="input-group col-xs-12 col-sm-7 col-md-3">
    <select >
      <option selected>Select a room:</option>
      <option value="1">Keeper Dufrain</option>
      <option value="2">Keeper Mcdonald</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
	</select>
    </label>
    
	<button type="submit" class="btn btn-default col-xs-12 col-sm-12 col-md-2">Submit</button>
    </fieldset>
</div> <!-- end row -->
</form>

<div class="row">
<div class="card col-xs-12 col-sm-12 col-md-6">
<figure class="col-xs-12 col-sm-6 col-md-6">
<img src="images/about.jpg" alt="The Big Bay Lighthouse" class="img-fluid pull-md-right">
</figure>
<h3 class="card-title pull-md-left">About</h3>
<p class="card-text pull-md-left">Ost, sus prem quatem
quia qui nonsendaniet
essitatur
as sit harum veliquo
distiur, con conem
imi, eos modi occupie
nimperat.
</p>
<p class="card-text hidden-xs pull-md-left">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div>

<div class="card-deck-wrapper col-xs-12 col-sm-12 col-md-6">
  <div class="card-deck">
<div class="card col-xs-12 col-sm-6 ">
<figure>
<img class="room-img img-fluid card-img-top pull-sm-right" data-src="images/room.jpg" src="images/room.jpg" alt="Card image cap">
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
<img class="spec-img img-fluid card-img-top pull-sm-left" data-src="images/specials.jpg"  src="images/specials.jpg" alt="Card image cap">
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