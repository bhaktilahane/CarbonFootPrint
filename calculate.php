
<!DOCTYPE html>
<html lang="en">
<head>
	
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Carbon Footprint Calculator - KJSCEs</title>
  <meta name="description" content="Welcome to KJSCE's very own Carbon Footprint Calculator created by students.">
	<meta name="keywords" content="">
	<meta name="author" content="KJ Somaiya College of Engineering">
	<meta name="generator" content="T4 Site Specific">
	<link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<!-- Bootstrap + Steller  -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
  
	<link rel="canonical" href="https://www.scu.edu/environmental-ethics/carbon-footprint-calculator/">
  
	<style>
        #page-title {
            color: white;
			padding-top: 80px; /* Same padding as content */
        }

		#content {
            padding-top: 80px; /* Adjust this value as needed */
        }
    </style>
  
  <!--[if lte IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" async></script>
  <![endif]-->
  
  <!-- external styles -->
 <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-iKbFRxucmOHIcpWdX9NTZ5WETOPm0Goy0WmfyNcl52qSYtc2Buk0NCe6jU1sWWNB" crossorigin="anonymous">-->
 <link rel="stylesheet" href="https://kit.fontawesome.com/895f1e62c1.css" crossorigin="anonymous">
  
  
  <!-- toolkit styles -->
   <link rel="stylesheet" href="https://assets.scu.edu/public/scu.min.css" media="screen" / >
  <link href="/media/scuedu/style-assets/stylesheets/f.css" rel="stylesheet">
  <!-- /toolkit styles -->
  
  <script src="https://www.scu.edu/assets/public/scu.js"></script>

  <link rel="stylesheet" type="text/css" href="carbon_style.css" /> 
<link rel="stylesheet" type="text/css" href="tipsy.css" />
<script language="javascript" type="text/javascript" src="jquery.js"></script> 
<script language="javascript" type="text/javascript" src="carbon_calculator.js"></script> 
<script language="javascript" type="text/javascript" src="jquery.msAccordion.js"></script> 
<script language="javascript" type="text/javascript" src="jquery.tipsy.js"></script>
<script language="javascript" type="text/javascript" src="highchart.js"></script>


  
  
  
  
  
  
  <!-- Google Analytics Tracking Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PX5DF0J27X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PX5DF0J27X');
</script>
<!-- Google Analytics Tracking Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5NKF3GP');</script>
<!-- End Google Tag Manager -->

  
</head>

<body background="assets/imgs/mainpage.jpg"></body>
    <!-- Transparent navbar -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container" >
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/kj-logo.jpg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="Login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Signup</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="index.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="result.html">result</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<script>
$('.dropdown-search form').submit(function (event)
{
    if($('#search_local').is(':checked')) {
    $('.dropdown-search form').attr('action', '/ethics/search/');
    }
});
</script>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container d-flex align-items-center justify-content-center justify-content-lg-between py-4">
      <div class="d-flex align-items-center py-3">
        <div class="text-center text-lg-left">
          
    

  </header>
  <script type="text/javascript" src="https://assets.scu.edu/js/instant-notifications2.0.js"></script>
  
  
  
  
  
  <div class="container">
    <h1 class="text-sans-light" id="page-title" >Calculate Your Carbon Footprint</h1>

  	<div class="row">
    	<div class="col-md-8">  
          <main id="content">
          <div id="d.en.224522""><!-- Embed code item --></div><div id="accordion" class="accordionWrapper" style="width:100%;"> 
	<div class="set calc_introduction">
		<div class="title">Introduction</div>
		<div class="content">
                         
			<h4>Welcome to KJ Somaiya College of Engineering's very own  Carbon Footprint Calculator created by KJSCE students. </h4>
					
			<p>We invite you to take this calculator to find out the size of your carbon footprint. </p>
			
			<p>You may be wondering - "what is a carbon footprint calculator?" Well, it is a device that measures how much carbon dioxide it takes to support a lifestyle. 
			 We're referring to carbon dioxide as a gas emitted from fossil fuel sources. Immense amounts of these emissions have contributed to the unnatural warming of 
			 the atmosphere and the earth. </p>
			 
			<p>With this Bronco-based calculator, we'd like each member of KJSCE to see the connection between their everyday actions, the amount of 
			fossil-fuel-related carbon dioxide those actions produce, and the effect on the world of such an amount of emissions. But don't worry: We're not in the 
			catastrophe camp of environmentalists. We're not interested in suggesting that you have to buy sky-is-falling scenarios about what will happen if you don't 
			change this or that aspect of your behavior. What we are interested in is inviting you to consider the connections: My actions produce these emissions with 
			this effect on our world. And then we're interested in posing the question: What do you think you should do about it? </p>
			
			<p>To get started please choose from the following:<br />
				<input type="radio" name="radio_commuter" value="on_campus" onclick="display_tabs('show')" /> On Campus <br/>
				<input type="radio" name="radio_commuter" value="full_commuter" onclick="display_tabs('show')" /> Off Campus or Full-time Commuter Student<br/>
				<input type="radio" name="radio_commuter" value="part_commuter" onclick="display_tabs('show')" /> Part-time Commuter Student or Faculty and staff<br />
			</p> 
		</div>
	</div>

	<div class="set transportation" id="transportation_tab"> 
		<div class="title">Transportation</div> 
		<div class="content">
		<br/>
			<form>
				<p>Do you longboard, skateboard, or bike to class? <br />
				<input type="radio" name="trans_radio_lsb" value="yes" onclick="display_comment('comment_transportation_lsb','Great decision! You are not only staying healthy, but you are reducing your carbon emissions.')"/>Yes
				<input type="radio" name="trans_radio_lsb" value="no" onclick="display_comment('comment_transportation_lsb','Unless you are walking you might want to consider using one of these to help you get to class. Not only will you stay fit, but you can also reduce your carbon emissions.')"/>No
				</p>
				<p class="pop_up_comment" id="comment_transportation_lsb"></p>
			
				<p>What size car do you use? <br />
				<select id="trans_select_car" onchange="trans_car_select_handler()">
					<option value="no_car">no car</option>
					<option value="small">small</option>
					<option value="average">average</option>
					<option value="suv">SUV/truck</option>
					<option value="hybrid">hybrid</option>
				</select></p>
				
				<p id="trans_input_car_miles_q" style="display:none;">Approximately how many miles do you drive/month? <a class="help" id="help" title="Automobile Distances<br>Santa Clara University to:<br>Santa Cruz:30.0 miles<br>Valley Fair Mall:2.1 miles<br>Downtown San Jose:3.6 miles <br>San Francisco:46.1 miles <br>Tahoe:228.4 miles" href="#"><img src="<t4 type="media" id="224551" formatter="path/*" />" width="20px" /></a><br />
				<input id="trans_input_car_miles" type="text"  size="4" maxlength="4" /> miles 
				</p>
				
				<p>Do you use the bus?<br />
				<input type="radio" name="trans_radio_use_bus" value="yes" onclick="display_question('show','trans_input_bus_miles')">Yes
				<input type="radio" name="trans_radio_use_bus" value="no" onclick="display_question('hide','trans_input_bus_miles')">No
				</p>
				
				<p id="trans_input_bus_miles_q" style="display:none;">How many miles/month do you travel by bus? <a class="help" id="help" title="Automobile Distances<br>Santa Clara University to:<br>Santa Cruz:30.0 miles<br>Valley Fair Mall:2.1 miles<br>Downtown San Jose:3.6 miles <br>San Francisco:46.1 miles <br>Tahoe:228.4 miles" href="#"><img src="<t4 type="media" id="224551" formatter="path/*" />" width="20px" /></a><br />
				<input id="trans_input_bus_miles" type="text"  size="4" maxlength="4"/> miles
				</p>
								
				<p>Do you use Caltrain or Bart?<br />
				<input type="radio" name="trans_radio_use_train" value="yes" onclick="display_question('show','trans_input_train_miles')">Yes
				<input type="radio" name="trans_radio_use_train" value="no" onclick="display_question('hide','trans_input_train_miles')">No
				</p>
				
				<p id="trans_input_train_miles_q" style="display:none;">Approximately how many miles/month do you travel on Caltrain or Bart? <a class="help" id="help" title="Automobile Distances<br>Santa Clara University to:<br>Santa Cruz:30.0 miles<br>Valley Fair Mall:2.1 miles<br>Downtown San Jose:3.6 miles <br>San Francisco:46.1 miles <br>Tahoe:228.4 miles" href="#"><img src="<t4 type="media" id="224551" formatter="path/*" />" width="20px" /></a><br /> 
				<input id="trans_input_train_miles" type="text"  size="4" maxlength="4"/> miles
				</p>
				
				<p>
				Have you traveled or do you plan to travel by airplane this year?<br />
				<input type="radio" name="trans_radio_use_plane" value="yes" onclick="display_question('show','trans_input_plane_miles')">Yes
				<input type="radio" name="trans_radio_use_plane" value="no" onclick="display_question('hide','trans_input_plane_miles')">No
				</p>
				
				<p id="trans_input_plane_miles_q" style="display:none;">
				How many miles have you traveled or do you plan to travel this year? <a class="help" id="help" title="Average Flight Mileage for Time Zones:<br>San Jose Airport to: <br>New York : 2,936 miles<br>Seattle : 838 miles<br>Denver : 1,299 miles<br>Chicago : 2,162 miles" href="#"> <img src="<t4 type="media" id="224551" formatter="path/*" />" width="20px" /> </a><br />
				<input id="trans_input_plane_miles" type="text"  size="5" maxlength="5"/> miles
				</p>
			
			</form>
		</div> 
	</div> 
	
	<div class="set partying" id="partying_tab"> 
		<div class="title">Partying</div> 
		<div class="content">
		<form>
				<p>How many nights a week do you go out? 
				<input id="nights_partying" type="text"  size="1" maxlength="1"/>nights
				</p>
				
				<p>How many red cups do you use on an average/party night? 
				<input id="amount_red_cups" type="text"  size="3" maxlength="3"/>red cups
				</p>
				
				<p>How many beers do you drink on average per party night?
				<input id="partying_beers" type="text"  size="3" maxlength="3"/>beers
				
				<p>How many nights do you pre-game? 
				<input id="nights_pregame" type="text"  size="4" maxlength="4"/>nights
				</p>
				
				<p>Do you play drinking games?
				<input type="radio" name="is_play_drinking_games" value="yes" onclick="display_comment('comment_partying_drinking_games','Maybe consider limiting the number of red cups you use per game...or pull out your reusable cups.')"/>Yes
				<input type="radio" name="is_play_drinking_games" value="no"  onclick="display_comment('comment_partying_drinking_games','This may help keep your carbon footprint smaller')"/>No
				</p>
				<p class="pop_up_comment" id="comment_partying_drinking_games"></p>
				
				<p>Do you use reusable cups?
				<input type="radio" name="is_use_reusable_cups" value="yes" onclick="display_comment('comment_partying_reusable_cups','Way to go! Just make sure you wash them well! ')"/>Yes
				<input type="radio" name="is_use_reusable_cups" value="no" onclick="display_comment('comment_partying_reusable_cups','Using 100 solo cups (five games of beer pong) is equal to nearly using a gallon of gasoline.')"/>No
				</p>
				<p class="pop_up_comment" id="comment_partying_reusable_cups"></p>
		</form>
		</div>
	</div>
	
	<div class="set consumption" id="consumption_tab">
		<div class="title">Consumption</div> 
		<div class="content">
				<p>Approximately how many soft-cover books do you buy/quarter?<br />
				<input id="soft_cover_per_quarter" type="text"  size="2" maxlength="4"/> books
				</p>
				
				<p>Approximately how many hard-cover books do you buy/quarter?<br />
				<input id="hard_cover_per_quarter" type="text"  size="2" maxlength="4"/> books
				</p>
				
				<p>How often do you buy a new article of clothing in a given month?<br />
				<input id="clothing_per_month" type="text"  size="2" maxlength="4"/> clothing/month
				</p>
				
				<p>If you drink your water from nonrefillable plastic bottles, how many do you buy/week?<br />
				<input id="consumption_plastic_bottle" type="text"  size="5" maxlength="4"/> bottles
				</p>
				
				<p>Do you own a: &nbsp; 
				<input type="radio" name="is_phone" value="smart_phone" /> Smart Phone &nbsp;&nbsp;
				<input type="radio" name="is_phone" value="mobile_phone"/> mobile phone
				</p>
				
				<p>How long have you had your current cell phone?  Please approximate in years.<br />
				<input id="duration_owning_cell_phone" type="text"  size="2" maxlength="4"/> years
				</p>
				
				<p>Do you own a: 
				<input type="radio" name="is_eReader" value="iPad" />iPad &nbsp;&nbsp;
				<input type="radio" name="is_eReader" value="kindle"/> Kindle
				</p>
				
				<p>How long have you had your current eReader?  Please approximate in years.<br />
				<input id="duration_owning_eReader" type="text"  size="2" maxlength="4"/>&nbsp;years
				</p>
				
				<p>Do you own an iPod?  
				<input type="radio" name="consumption_radio_ipod" value="yes" />Yes &nbsp;&nbsp;
				<input type="radio" name="consumption_radio_ipod" value="no"/> No
				</p>
				
				<p>How long have you had your current iPod?  Please approximate in years.<br />
				<input id="consumption_ipod_duration" type="text"  size="2" maxlength="4"/> years
				</p>
				
				
		</div> 
	</div>
	
	<div class="set energy" id="energy_tab"> 
		<div class="title">Energy</div> 
		<div class="content">
			<p>If you're an on campus resident choose from the following dorms:
				<select id="energy_campus_resident">
					<option value="none">None</option>
					<option value="swig">Sandipani</option>

				</select>
			</p>		
		
				<p>From the following list of appliances, electronics, lighting, etc, input how many of each item are in your dorm room and how many hours a day each item is <strong>plugged in</strong>. If you own an item not listed below please be sure to fill in extra fields: What is the item and wattage?  You can find the wattage on the bottom of most appliances.  Be sure to multiply by 1000 if the wattage is given in kilowatts.</p>
				
				<table style="border-color:black; border:1px;">
					<tr style="font-weight:bold; border-color:black; border-style:dashed; border:1px;">
						<td>ITEM</td>
						<td># of items</td>
						<td>Watts</td>
						<td>USAGE: hrs/day plugged in</td>
					</tr>
					
					<tr>
						<td>Refrigerator</td>
						<td><input id="appliance_1_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_1_watts" type="hidden"  value="160" />160</td>
						<td><input id="appliance_1_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Microwave</td>
						<td><input id="appliance_2_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_2_watts" type="hidden"  value="1000" />1000</td>
						<td><input id="appliance_2_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Clock radio</td>
						<td><input id="appliance_3_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_3_watts" type="hidden"  value="10" />10</td>
						<td><input id="appliance_3_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Coffee maker</td>
						<td><input id="appliance_4_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_4_watts" type="hidden"  value="1200" />1200</td>
						<td><input id="appliance_4_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>IPod dock</td>
						<td><input id="appliance_5_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_5_watts" type="hidden"  value="100" />100</td>
						<td><input id="appliance_5_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Stereo sound system</td>
						<td><input id="appliance_6_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_6_watts" type="hidden"  value="150" />150</td>
						<td><input id="appliance_6_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Computer desktop</td>
						<td><input id="appliance_7_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_7_watts" type="hidden"  value="225" />225</td>
						<td><input id="appliance_7_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Computer monitor 15"</td>
						<td><input id="appliance_8_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_8_watts" type="hidden"  value="35" />35</td>
						<td><input id="appliance_8_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Computer, laptop</td>
						<td><input id="appliance_9_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_9_watts" type="hidden"  value="60" />60</td>
						<td><input id="appliance_9_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Printer</td>
						<td><input id="appliance_10_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_10_watts" type="hidden"  value="100" />100</td>
						<td><input id="appliance_10_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>TV</td>
						<td><input id="appliance_11_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_11_watts" type="hidden"  value="115" />115</td>
						<td><input id="appliance_11_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>DVD/CD player</td>
						<td><input id="appliance_12_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_12_watts" type="hidden"  value="30" />30</td>
						<td><input id="appliance_12_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Air conditioner</td>
						<td><input id="appliance_13_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_13_watts" type="hidden"  value="1100" />1,100</td>
						<td><input id="appliance_13_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Portable fan</td>
						<td><input id="appliance_14_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_14_watts" type="hidden"  value="115" />115</td>
						<td><input id="appliance_14_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Space heater</td>
						<td><input id="appliance_15_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_15_watts" type="hidden"  value="1000" />1000</td>
						<td><input id="appliance_15_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Halogen floor lamp</td>
						<td><input id="appliance_16_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_16_watts" type="hidden"  value="300" />300</td>
						<td><input id="appliance_16_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Incandescent light bulb</td>
						<td><input id="appliance_17_total" type="text"  size="4" maxlength="4"/></td>
						<td><input id="appliance_17_watts" type="hidden"  value="75" />75</td>
						<td><input id="appliance_17_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Compact fluorescent light bulb</td>
						<td><input id="appliance_18_total" type="text"  size="4" maxlength="4"/></td>
						<td><input id="appliance_18_watts" type="hidden"  value="20" />20</td>
						<td><input id="appliance_18_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Vacuum cleaner</td>
						<td><input id="appliance_19_total" type="text"  size="4" maxlength="1"/></td>
						<td><input id="appliance_19_watts" type="hidden"  value="1440" />1440</td>
						<td><input id="appliance_19_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
					<tr>
						<td>Other <input id="other_energy_source" type="text"  size="20" maxlength="20"/></td>
						<td><input id="appliance_20_total" type="text"  size="4" maxlength="4"/></td>
						<td><input id="appliance_20_watts" type="text"  size="4" maxlength="5"/></td>
						<td><input id="appliance_20_usage" type="text"  size="4" maxlength="4"/></td>
					</tr>
					
				</table> 
				
				
			
		</div> 
	</div>
	
	<div class="set food" id="food_tab">
		<div class="title">Food</div>
		<div class="content">
			<p>Please select which meal plan you are currently on.<br/>
				<input type="radio" name="is_meal" value="preferred" />Preferred 
				<input type="radio" name="is_meal" value="basic"/>Basic 
				<input type="radio" name="is_meal" value="junior_senior"/>Junior Senior 
				<input type="radio" name="is_meal" value="basic"/>No meal plan 
				</p>
			
			<p>Please select which diet best applies to you. <a href="#" class="help" id="help" title="<strong>Vegan: </strong>Diet that excludes ALL animal products.<br><strong>Vegetarian:</strong> Diet that excludes all MEAT products<br><strong>Omnivore: </strong>that includes meat with at least 2 meals/day<br><strong>X-treme meat eater: </strong>Diet that includes meat with every meal"><img src="<t4 type="media" id="224551" formatter="path/*" />" width="20px" /></a><br/>
				<input type="radio" name="is_diet" value="vegan" />Vegan 
				<input type="radio" name="is_diet" value="vegetarian"/>Vegetarian 
				<input type="radio" name="is_diet" value="meat_eater"/>Omnivore
				<input type="radio" name="is_diet" value="carnivore"/>X-treme meat eater
			</p>
			
			<p>If you drink coffee please select from the following options: <br />
				<select id="food_coffee_type" onchange="food_coffee_select_handler()">
					<option value="none">-Select-</option>
					<option value="black_coffee">Black Coffee</option>
					<option value="cream_sugar">Black Coffee + cream or sugar</option>
					<option value="latte">Latte</option>
				</select>
				</p>
				
			<p id="food_coffee_frequency_q" style="display:none;">About how many times a week do you get coffee? <br />
				<input id="food_coffee_frequency" type="text"  size="2" maxlength="4"/> times
			</p>
			
			<p>Do you buy food at farmers markets?<br />
				<input type="radio" name="food_farmers_market" value="yes" onclick="display_comment('comment_farmers_market','Great decision! Buying locally grown food lowers your carbon emissions')" /> yes &nbsp;
				<input type="radio" name="food_farmers_market" value="no" onclick="display_comment('comment_farmers_market','You might want to check out the farmers market Saturday mornings in Santa Clara, or visit SCU&rsquo;s Forge Garden located on Benton Street.')" /> no 
			</p>
			<p class="pop_up_comment" id="comment_farmers_market" style="color:white;"></p>
			
		</div>
	</div>
	
	<div class="set waste" id="waste_tab">
		<div class="title">Waste</div>
		<div class="content">
			
			<p>From the following scale decide how much of your waste is recycled (the average person recycles around 17% of their waste)<br />
				<input type="radio" name="radio_recycle" value="below_avg" />Below Average<br />
				<input type="radio" name="radio_recycle" value="avg" />Average<br />
				<input type="radio" name="radio_recycle" value="above_avg" />Above Average<br />
				</p>
				
			<p>From the following scale choose the amount of trash you accumulate/day (A bag of sugar weighs 4 lbs. The average person accumulates 4lbs trash/day)</p>
				<input type="radio" name="radio_trash" value="less_4lb" />Less than 4lbs<br/>
				<input type="radio" name="radio_trash" value="4lb" />About 4lbs<br/>
				<input type="radio" name="radio_trash" value="more_4lb" />Greater than 4lbs<br />
		</div>
	</div>
	
	<div class="set water" id="water_tab">
		<div class="title">Water</div>
		<div class="content">
		
		<p>On average how long are your showers? <input id="water_showers_duration" type="text"  size="5" maxlength="4"/> minutes</p>
		<p>On average how many showers/week? <input id="water_showers_times" type="text"  size="5" maxlength="4"/> times</p>
		<p>On average how many loads of laundry/month? <input id="water_laundry" type="text"  size="5" maxlength="4"/> times</p>
		<p>Average toilet flushes/day? <input id="water_flush" type="text"  size="5" maxlength="4"/> flushes</p>
		<p>Average cups of water you drink/day from tap or water fountain? <input id="water_cups" type="text"  size="5" maxlength="4"/> cups <a class="help" id="help" title="The average water bottle holds around 2.5 cups and a larger liter bottle holds 4 cups"><img src="<t4 type="media" id="224551" formatter="path/*" />" width="18px" /></a></p>
		
		<p>Do you use a refillable water bottle?
			<input type="radio" name="water_bottle_refill" value="yes" onclick="display_comment('comment_water_bottle','Way to go! Every time you use your refillable water bottle instead of buying a plastic bottle you are saving as much carbon as driving 30 miles in an average sized car. That could get you to Palo Alto and back!')" />yes
			<input type="radio" name="water_bottle_refill" value="no" onclick="display_comment('comment_water_bottle','A refillable water bottle is around $10 -$20 dollars and in the long run will save you hundreds of dollars.')" />no
		</p>
		<p class="pop_up_comment" id="comment_water_bottle"></p>


		<p>&nbsp;</p>
		</div>
	</div>

	<div class="set ethics" id="ethics_tab">
		<div class="title">Ethics</div> 
		<div class="content" style="color:white;">
			<p>Why does sustainability even matter? The concept of sustainability is used pretty often. We've found ourselves tuning it out. But sustainability, when you strip away all the rhetoric and politics, poses a pretty good question: Do we have an obligation to hand on to the next generation a world that will allow them to have at least as good a life as the one we have? "Obligation" may seem like a pretty strong word. But "obligation" captures the significance of the equal right that a person of the future has for a good and healthy life compared to a person of the present ‚Äì a person like all of us. But, if "obligation" does seem too strong, then why not think of sustainability in terms of the notion of "care." For instance, for the sake of the care of future children and grandchildren, should we act sustainably now?</p>
			
			<p>Let's also bring this, so to speak, down to earth. So please consider the following:  
			<ul style="list-style:disc;">
				<li>We're all insanely busy students who don't think we have time to do this calculator, much less the time to change various habits in our lives that may be emitting an undue amount of carbon dioxide. </li>
				<li>We all need to consider: Even the smallest changes can make a difference. </li>
				<li>These changes can be things we, so to speak, give up: For instance, giving up meat once a week yields a significant reduction in CO2 emissions.</li>
				<li>Or these changes can be things that we do: Buy our own re-usable water bottle and drink from the tap. Or buy carbon offsets ‚Äì they're pretty cheap ‚Äì to account for the high emissions generated by our airplane travel.</li>
				<li>Or we may already be dreaming big about a better world, moved by the beauty of the earth and dazzled by its complexity. If so: Let's make those dreams a reality!</li>
				<li>Overall, please remember this calculator was created by KJSCE students just like yourself ‚Äì students who want our kids and grandkids to enjoy mother earth as much as we do!</li>
			</ul></p>

		</div>
	</div>
	
	<div class="set result" id="result_tab">
		<div class="title" onclick="showResult()">Result</div> 
		<div class="content">
		<div id="pie_container" style="width: 560px; height: 400px; margin: 0 auto"></div>
		<p>&nbsp;</p>
			<table cellpadding="0" cellspacing="0">
			<tr style="border-bottom:solid thin #000">
				<th width="150px">Category</th>
				<th>KgCO2e / year<a class="help" id="help" title="The tacked on "e" to kg CO2 means the carbon dioxide equivalent and is most widely used to measure greenhouse emissions.  All greenhouse gases have potential to warm the atmosphere, thus accounted for when you see emissions in terms of CO2e"> <img src="<t4 type="media" id="224551" formatter="path/*" />" width="18px" /></a></th>
				<th>Percentage</th></tr>
			
			<tr>
				<td style="font-weight:bold;">Transportation</td>
				<td id="transportation_tab_total">empty</td>
				<td id="transportation_tab_percentage">empty</td></tr>
				
			<tr>
				<td style="font-weight:bold;">Partying</td>
				<td id="partying_tab_total">empty</td>
				<td id="partying_tab_percentage">empty</td></tr>
			
			<tr>
				<td style="font-weight:bold;">Consumption</td>
				<td id="consumption_tab_total">empty</td>
				<td id="consumption_tab_percentage">empty</td></tr>
			
			<tr>
				<td style="font-weight:bold;">Energy</td>
				<td id="energy_tab_total">empty</td>
				<td id="energy_tab_percentage">empty</td></tr>
			
			<tr>
				<td style="font-weight:bold;">Food</td>
				<td id="food_tab_total">empty</td>
				<td id="food_tab_percentage">empty</td></tr>
			
			<tr>
				<td style="font-weight:bold;">Waste</td>
				<td id="waste_tab_total">empty</td>
				<td id="waste_tab_percentage">empty</td></tr>
				
			<tr>
				<td style="font-weight:bold;">Water</td>
				<td id="water_tab_total">empty</td>
				<td id="water_tab_percentage">empty</td></tr>
			<tr>
				<td style="font-weight:bold;">Total::</td>
				<td style="font-weight:bold;" id="carbon_total">empty</td>
				<td style="font-weight:bold;" id="carbon_total_percentage">empty</td></tr>
			</table>
			
			<br><h4>Your result compared to the carbon emissions of the average citizen in the following countries:</h4>
			<div id="result_bar" style="z-index:100; position:relative; left:-25px;"></div>
			
            <div class="set result" id="result_tab">
                <div class="title" onclick="showResult()">Result</div> 
                <div class="content">
                    <div id="pie_container" style="width: 560px; height: 400px; margin: 0 auto"></div>
                    <p>&nbsp;</p>
                    <table cellpadding="0" cellspacing="0">
                        <tr style="border-bottom:solid thin #000">
                            <th width="150px">Category</th>
                            <th>KgCO2e / year<a class="help" id="help" title="The tacked on "e" to kg CO2 means the carbon dioxide equivalent and is most widely used to measure greenhouse emissions.  All greenhouse gases have potential to warm the atmosphere, thus accounted for when you see emissions in terms of CO2e"> <img src="<t4 type="media" id="224551" formatter="path/*" />" width="18px" /></a></th>
                            <th>Percentage</th>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Transportation</td>
                            <td id="transportation_tab_total">empty</td>
                            <td id="transportation_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Partying</td>
                            <td id="partying_tab_total">empty</td>
                            <td id="partying_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Consumption</td>
                            <td id="consumption_tab_total">empty</td>
                            <td id="consumption_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Energy</td>
                            <td id="energy_tab_total">empty</td>
                            <td id="energy_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Food</td>
                            <td id="food_tab_total">empty</td>
                            <td id="food_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Waste</td>
                            <td id="waste_tab_total">empty</td>
                            <td id="waste_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Water</td>
                            <td id="water_tab_total">empty</td>
                            <td id="water_tab_percentage">empty</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold;">Total::</td>
                            <td style="font-weight:bold;" id="carbon_total">empty</td>
                            <td style="font-weight:bold;" id="carbon_total_percentage">empty</td>
                        </tr>
                    </table>
                    <br>
                </div>
            </div>
</div>   
	</div>
</div>
        <br>
		<h4 style="color: white;">Click on the button below to save your result</h4>
        <div id="result_bar" style="z-index:100; position:relative; left:-25px;"></div>
        <!-- Button to send data to backend -->
        <button onclick="showResult()">Save Your Result</button>
    </div>
</div>

</div>

<script language="javascript" type="text/javascript"> 
$('#help[title]').tipsy({gravity:'w', html:true, fade:true, fallback: ''});
$(document).ready(function(){
	$("#accordion").msAccordion({vertical:true});
	display_tabs('hide');
	})
</script>



<div id="d.en.414601"><!-- General Content --></div>
<div id="content-414601">                                                       

<p>&nbsp;</p>

</div>



         <div class="row">
          <div class="col-md-6">
            

          </div>
          <div class="col-md-6">
            

          </div>
         </div>
         </main>
         <div class="pull-right"></div>
       </div>
      <div class="col-md-4">
          <nav class="sidebar" aria-label="Section Navigation">
  	        <div class="sidebar-top">
                
		<a href="/environmental-ethics/" class="sidebar-mobile-trigger d-md-none stretched-link text-primary d-flex" data-toggle="collapse" data-target="#sidebarLinks" aria-expanded="false" aria-controls="sidebarLinks">Environmental Ethics Sections <i class="fas fa-bars"></i></a>

<script>
$(document).ready(function() { 
	if($('.sidebar--links [class*=currentsection]')) { $('.sidebar--links [class*=currentsection]').addClass('active');}//
	$('.sidebar--links').closest('li').children('a').addClass('text-sans-bold');
	$('<span class="sr-only">Current Page: </span>').insertBefore('.currentsection');
});
</script>

            </div>
          </nav>
          

          
      </div> 
      </div>
    </div>
   
    
    
   </body>
</html>