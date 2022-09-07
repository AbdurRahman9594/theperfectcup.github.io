<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">Forest Colony | Taj Mahal, Agra | 282001</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>OCTOBER 13, 2022</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE 
                        <br>
                        <small>SEPTEMBER 21, 2022</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE 
                        <br>
                        <small>JULY 18, 2022</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>The coconut oil coffee is not something new, and has been around for a long time, but it was recently made popular again because of the creation of Bulletproof Coffee. That’s basically coffee supplemented with MCT oil, which is actually extracted from coconut oil. Research shows there are benefits of using both types of oils in your coffee for that boost of energy. Oil in my coffee? It might sound bizarre, but it’s actually pretty delicious and may actually have health benefits if you have it in moderation. Just add a about a teaspoon to your cup of coffee (with or without creamer) and the result is a creamy frothy delicious coconut oil coffee.</p>
			<p><strong>HEALTH BENEFITS OF DRINKING COCONUT OIL COFFEE:</strong> If you’re not a coffee drinker, there’s no reason to start drinking coffee after reading this post. Keep in mind that coconut oil is a saturated fat and having that frequently may not be the best option for everyone. Yet research suggests that enjoying this drink maybe once a week as a treat is not only delicious but can have some strong healthy benefits like the following:</p>
			<p><strong>1.Increase Energy:</strong> Coconut oil is a “thermogenic” food, which means it generates heat in your body. When you eat it, it can help you create energy and burn more fat. Combine that with coffee, and you’ll be a caffeine machine!</p>
			<p><strong>2.Improve Metabolism:</strong> The caffeine in coffee is known to give your metabolism a push. And coconut oil is largely considered a natural laxative which means it helps to improve your digestion. Combining those two ingredients has a big impact on your digestive system.</p>
			<p><strong>3.Boost Immune:</strong> One of the main fatty acids found in coconut oil is lauric acid, which can actually help fight germs and bacteria.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>The Irish coffee is an iconic cocktail, and the original recipe is not difficult. It requires four common ingredients: The combination of a smooth Irish whiskey with rich black coffee that's sweetened and topped with cream is an absolute delight.</p>
			<p>This recipe was created in Ireland by Joe Sheridan in the early 1940s. Despite some common shortcuts, authentic Irish coffee is not as simple as spiking coffee with a shot of whiskey. Instead, this is a well-planned, carefully constructed coffee drink that should be mixed with the care of any latte or cappuccino. That said, it is actually quite easy.</p>
			<p>The Irish Coffee has become an icon of the east coast with venues along coastal towns lauding their 'Best Irish Coffee.' True or not, there is a slim margin of error with coffee preparation being the easiest aspect to negatively affect your experience.</p>
			<p><strong>Who Created the Irish Coffee?</strong>
The Irish coffee was created by chef Joe Sheridan in 1942. He ran the restaurant at the Foynes airbase outside of Limerick, Ireland. The story goes that an evening flying boat flight returned to the airport after a failed attempt to reach New York during a winter storm. Sheridan mixed up the first round of Irish coffees for the stranded passengers. One surprised American asked, "Hey Buddy, is this Brazilian coffee?" "No," said Joe, "that's Irish coffee." Later, Sheridan used his Irish wit to explain how to make a true Irish coffee:

<p><strong>Cream</strong> - Rich as an Irish Brogue</p>
<p><strong>CCoffee</strong> - Strong as a Friendly Hand</p>
<p><strong>CSugar</strong> - Sweet as the tongue of a Rogue</p>
<p><strong>CWhiskey</strong> - Smooth as the Wit of the Land</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p><strong>Preparation:</strong>
Place PJ’s Iced Coffee Concentrate, caramel sundae syrup, vanilla syrup, and cold milk in blender container. Cover and blend on medium speed until combined. Add ice cubes. Process until thick and slushy. Pour into tall glasses. Top with whipped cream, drizzle with caramel syrup, and serve.</p>
<p><strong>Ingredients</strong>
<p>• ¼ c. PJ’s Iced Coffee Concentrate</p>
<p>• 5 tbsp. caramel sundae syrup, plus additional for garnish</p>
<p>• 1 tbsp. vanilla flavored syrup</p>
<p>• ¼ c. cold milk</p>
<p>• 1 ½ c. ice cubes</p>
<p>• Whipped cream, for garnish</p>
<strong>Yield: 2 Servings</strong></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
