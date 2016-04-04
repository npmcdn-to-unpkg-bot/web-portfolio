veggies = ['arugula','carrot tops','cucumber leaves','endive','ecarole','frisee lettuce','kale','mache','red or green lettuce','romaine lettuce','spring greens','turnip greens','dandelion greens','mint','basil','watercress',
'wheatgrass','chicory','raspberry leaves','cilantro','radicchio','bok choy','fennel','borage leaves','dill leaves','yu choy'];
//first list, do two from this
veggiesTwo = ['parsley','spinach','mustard greens','beet greens','swiss chard','radish tops','sprouts' ];
//one from this
treatsOne = ['carrots','broccoli','roses','nasturtiums', 'pansies', 'hibiscus','celery','bell peppers','brussel sprouts','cabbage','broccolini','summer squash','zucchini squash'];
//one from this
treatsTwo = ['apple','cherries','pear','peach','plum','kiwi',
'papaya','mango','berries','pineapple','banana','melons','star fruit','apricot','currants','nectarine'];

poisonousFood = ['agave','amaryllis','azalea','bird of paradise','bloodroot','buttercup','black locust','boxwood','buckeye',
'buckthorn','caladium','calla','castor bean','christmas rose','cone flower','crown of thorns','daffodil','daphne','delphinium','dumbcane','eggplant','elderberry','elephant ear','flowering tobacco','foxglove','holly','horsechestnut','hyacinth','iris','jack-in-the-pulpit','jerusalem cherry','jimson weed','jonquil','lantana','larkspur','lily-of-the-valley','lupine','mayapple','mistletoe','morning glory','mustard','narcissus','nicotiana','nightshade','oleander','philodendron','poison hemlock','poison ivy','potato','privet','ranunculus','rhododendron','rhubarb','rosary pea','snow-on-the-mountain','sweet pea','sweet potato','skunk cabbage','tansy','tomato','tulip','virginia creeper','water hemlock','wisteria','yew'];

//lists from http://rabbit.org/suggested-vegetables-and-fruits-for-a-rabbit-diet/

results = [];

var textoutput = document.getElementById("textoutput");

function setText(textoutput){
 
 textoutput.textContent = results.toString();
    }

                                                  
function saladGenerator (){

  var vegOneRandom=Math.floor(Math.random()* veggies.length);
  var vegTwoRandom=Math.floor(Math.random()* veggies.length);
  var vegThreeRandom=Math.floor(Math.random()* veggiesTwo.length);
  var treatOneRandom=Math.floor(Math.random()* treatsOne.length);
  var treatTwoRandom=Math.floor(Math.random()* treatsTwo.length); 
  
  
  //two veggies from first array
  var vegOne=veggies[vegOneRandom];
  var vegTwo=veggies[vegTwoRandom];
  //test image output:
  //var vegThree="parsley";
  
  //if veg 2 and 1 are same, redo two using for loop 
  
 for (vegTwo;vegTwo==vegOne;)
       {vegTwo=veggies[vegTwoRandom];
       if (vegTwo != vegOne) break;}
  
   //one from second array
  var vegThree=veggiesTwo[vegThreeRandom];
  //one from third array
  var treatOne=treatsOne[treatOneRandom];
  //one from fourth array
  var treatTwo=treatsTwo[treatTwoRandom]; 
  
  
  
  //if veggie is kale or parsley, display photo
  
  var img = document.createElement("img");
  var src = document.getElementById("bunnyphoto");
  var caption = document.getElementById("bunnycap");
  
  if(vegOne==="kale"||vegTwo==="kale")
      {img.src = "http://alexpow.com/images/buffy5.jpg"; src.appendChild(img);
      caption.textContent="This is Buffy, and her favorite food is kale";
      }
  
  if(vegThree==="parsley")
      {img.src = "http://alexpow.com/images/abbie1.jpg"; src.appendChild(img);
       caption.textContent="This is Abbie, and her favorite food is parsley";
      }
  
  //output in console
  results=[vegOne, vegTwo, vegThree, treatOne, treatTwo];
  console.log(results,"end");
  
  setText(textoutput);
  
  
  }
document.getElementById("saladButton").addEventListener("click", saladGenerator); 

//begin second part of page

function veggieChecker(){
  
  var vegToCheck =  document.getElementById("vegToCheck");
  
//veggies.indexOf(vegToCheck) > -1;
var veggiesNumOne=veggies.indexOf(vegToCheck);
var veggiesNumTwo=veggiesTwo.indexOf(vegToCheck);
var treatsNumOne=treatsOne.indexOf(vegToCheck);
var treatsNumTwo=treatsTwo.indexOf(vegToCheck);
var poisonNum=poisonousFood.indexOf(vegToCheck);
 
  if (veggiesNumOne > -1)
        {results=["yes"];}

  else if (veggiesNumTwo > -1)
        {results=["yes"];}

  else if (treatsNumOne > -1)
        {results=["Yes as a treat"];}

  else if (treatsNumTwo > -1)
        {results=["Yes, but sparingly as a treat because it is very sugary."];}

  else if (poisonNum > -1)
        {results=["NO! This is poisonous to rabbits."];}
		
  else
        {results=["I don't know"];}
		
		console.log(veggiesNumOne,veggiesNumTwo,treatsNumOne,treatsNumTwo,poisonNum);
		
  setText(textoutput);

}

document.getElementById("vegcheck").addEventListener("click", veggieChecker);

