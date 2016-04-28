<?php include'head.php'?>
<body id="about">
<?php include'nav.php'?>

<div class="container-fluid">
<div class="row">

<article>
<h1>Available</h1>
<h5>That room is available for your selected date. If you'd like to book it, please fill out the rest of the information below.</h5>

</article>

<form class="form-inline" action="FormToEmail.php" method="post" enctype="multipart/form-data" name="book">
    <fieldset class="form-group">
    <legend>Book a room</legend>

    <label class="input-group col-xs-12 col-sm-5 col-sm-offset-1 col-md-3">
    <span class="input-group-addon ">Name:</span>
	<input class="form-control " type="text" name="name" value="" placeholder="First Last">
	
	</label>

    <label class="input-group col-xs-12 col-sm-5 col-md-3"><span class="input-group-addon">Email:</span><input class="form-control" type="email" name="email" value="" placeholder="your@email.com" ></label>

    <label class="input-group col-xs-12 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-0">
<span class="input-group-addon">Phone:</span><input class="form-control" type="tel" name="phone" value="" placeholder="555-555-5555" >
    </label>
    
    <label class="input-group checkbox-inline" col-sm-2 col-sm-offset-4">
  <input type="checkbox" id="specialchecked" value="specialyes">Special?
	</label>
    
    <label class="input-group-lg col-xs-12">
    <input name="subject" type="hidden" value="Book" >
    <input name="redirect" type="hidden" value="thanks.php">
	<button type="submit" class="submission btn">Book my room</button>
    </label>
    </fieldset>
</form> 

</div> <!-- end row -->

</div> <!-- end container -->

<?php include'footer.php'?>