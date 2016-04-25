<?php include'head.php'?>
<body id="home">
<?php include'nav.php'?>

<form class="form-inline">
<div class="row">
    <fieldset>
    <legend>Availability</legend>
    <div class="select-date col-xs-12 col-md-8 col-lg-5">
    <label class="input-group">
    <span class="input-group-addon">Date:</span>
	<input class="form-control" type="date" name="indate" value="" >
	<span class="input-group-addon"><span class="glyphicon glyphicon-arrow-right"  aria-hidden="true"></span></span>
	<input class="form-control " type="date" name="outdate" value="" >
	</label>
    </div>
    <div class="select-guests col-xs-12 col-md-3 col-lg-2">
    <label class="input-group"><span class="input-group-addon" id="sizing-addon3">Guests:</span><input class="form-control" type="number" name="amount" value="" placeholder="2" ></label>
    </div>
    <div class="select-room col-xs-12 col-md-5 col-lg-3">
    <label class="input-group">
    <select class="form-control">
      <option>Select a room:</option>
      <option>Keeper Dufrain</option>
      <option>Keeper Mcdonald</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
	</select>
    </label>
    </div>
    </fieldset>
	<button type="submit" class="btn btn-default col-xs-12 col-md-4 col-lg-2">Submit</button>
</div> <!-- end row -->
</form>

<div class="row">
<div class="about col-xs-12 col-md-12 col-lg-6">
<figure class="col-xs-12 col-md-6 col-lg-6">
<img src="images/about.jpg" alt="The Big Bay Lighthouse">
</figure>
<h3>About</h3>
<p>Ost, sus prem quatem
quia qui nonsendaniet
essitatur
as sit harum veliquo
distiur, con conem
imi, eos modi occupie
nimperat.
</p>
<p class="nophone">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div>

<div class="rooms col-xs-12 col-md-6 col-lg-3">

<h4>Check out our rooms</h4>
<p class="nophone">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div>

<div class="specials col-xs-12 col-md-6 col-lg-3">

<h4>We have specials!</h4>
<p class="nophone">Et pelibere
renimperio
occum quo
illestrum laccatur
accullaceped
mi.</p>
</div>

</div> <!-- end row -->

</div> <!-- end container -->

<?php include'footer.php'?>