<?php 
$acContent =  [
	[ 
		"logoID" => "ac-1we",
	],
	[ 
		"logoID" => "ac-2stam",
	],
	[ 
		"logoID" => "ac-3stb",
	],
	[ 
		"logoID" => "ac-4len",
	],
	[ 
		"logoID" => "ac-5mon",
	],
	[ 
		"logoID" => "ac-6ey",
	],
	[ 
		"logoID" => "ac-7glo",
	],
	[ 
		"logoID" => "ac-8fino",
	],
	[ 
		"logoID" => "ac-9fw",
	],
	[ 
		"logoID" => "ac-10ft",
	],				
];
	
	
?>

<div class="accolades">
	<div class="flex-wrapper ac-logo-wrapper">
<?php
		for($i = 0; $i < count($acContent); $i++) {
			echo '<div class="flex-item ac-logo '.$i.'" id="'.$acContent[$i]["logoID"].'"></div>';
		}
?>
	</div>
	<div class="quote-container">
		<div id="display-quote"></div>
	</div>
</div>

	
<script>
	var logos = document.querySelectorAll('.ac-logo');
	var quote = document.getElementById('display-quote');
	var logosClickedArray = [];
	
	function setInitials() {
		//set first logo and quote to be active on page load
		quote.innerHTML = 'WEF names Juvo as a 2018 Technology Pioneer, among 60 other early-stage companies \“recognized for their design, development and deployment of potentially world-changing innovations and technologies.\”';
		var firstLogo = document.getElementById('ac-1we');
		firstLogo.classList.add('active-logo');
		logosClickedArray.push("ac-1we");		
/*
		setTimeout(function() {
		firstLogo.classList.remove('active-logo');
		}, 5000);
*/
	}

	document.addEventListener("DOMContentLoaded", function() {
		setInitials();
	});

/* //Click Event Logging
	window.onclick = e => {
	    console.log(e.target);
	    console.log(e.target.id);
	} 
*/

    function activeLogo(e) {
      this.classList.add('active-logo');
      quote.classList.add('fade-up-animation');
	  oneColorLogo(e);
	  var that = this;
	  setTimeout(function() {
		quote.classList.remove('fade-up-animation');
	  }, 700);
    }
    
    function oneColorLogo(e) {
	    logoClickedID = e.target.id;
	    logosClickedArray.push(logoClickedID);
	    for (i = 0; i < logosClickedArray.length; i++) {
		    if (logosClickedArray.length > 2) {
			    logosClickedArray.shift();
		    }
		    if (logosClickedArray[i] !== logosClickedArray[i - 1]) {
			    coloredLogoToRemove = document.getElementById(logosClickedArray[i-1]);
			    if ( coloredLogoToRemove !== null ) {
				    	coloredLogoToRemove.classList.remove('active-logo');				    
			    }
		    } else {
		    		quote.classList.remove('fade-up-animation');
		    }
	    }
    }

	function displayQuote(e) {
		//display quote string that matches logo id
		var idClicked = e.target.id;
		if (idClicked == "ac-1we") {
			quote.innerHTML = 'WEF names Juvo as a 2018 Technology Pioneer, among 60 other early-stage companies \“recognized for their design, development and deployment of potentially world-changing innovations and technologies.\”';
		} else if (idClicked == "ac-2stam") {
		   quote.innerHTML = 'Juvo wins the gold Stevie 2017 for American business achievement.';
		} else if (idClicked == "ac-3stb") {
		   quote.innerHTML = 'Juvo wins the gold Stevie 2017 for business achievement internationally.';
		} else if (idClicked == "ac-4len") {
		   quote.innerHTML = 'Juvo is recognized by LendIt Fintech 2018 as the \“Most Innovative Mobile Technology.\"';
		} else if (idClicked == "ac-5mon") {
		   quote.innerHTML = 'Mondato honors Juvo as the digital finance provider who exhibited the most innovation in the Latin American market, 2016.';
		} else if (idClicked == "ac-6ey") {
		   quote.innerHTML = 'EY recognizes Juvo CEO Steve Polsky as a Finalist for the Northern California \“Entrepreneur of the Year\” Award 2018.';
		} else if (idClicked == "ac-7glo") {
		   quote.innerHTML = 'Juvo shortlisted for the GLOMOs 2018 as \“Best Mobile Innovation for Emerging Markets\”';
		} else if (idClicked == "ac-8fino") {
		   quote.innerHTML = 'Juvo debuts its Identity Scoring technology at Finovate Fall 2016.';
		} else if (idClicked == "ac-9fw") {
		   quote.innerHTML = 'Juvo is selected as one of Fierce Wireless’ “Fierce 15” of 2016.';
		} else if (idClicked == "ac-10ft") {
		   quote.innerHTML = 'Juvo is named an \“emerging market fintech to watch\” by Financial Times, 2016.';
		} else {
		   quote.innerHTML = 'WEF names Juvo as a 2018 Technology Pioneer, among 60 other early-stage companies \“recognized for their design, development and deployment of potentially world-changing innovations and technologies.\”';
		}    
    } //displayQuote

	//get Nodes list and set event listeners
    logos.forEach(logo => logo.addEventListener('click', activeLogo));
    logos.forEach(logo => logo.addEventListener('click', displayQuote));		
</script>