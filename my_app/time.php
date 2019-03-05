<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
	<style type="text/css">
		body{
		  background-image: url("Dx2Se4GUwAAnIj6.jpg");
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		  background-position: center;
		  background-size: cover;
		}
		.flex-container {
		    display: -ms-flexbox;
		    display: -webkit-flex;
		    display: flex;
		    -webkit-flex-direction: column;
		    -ms-flex-direction: column;
		    flex-direction: column;
		    -webkit-flex-wrap: nowrap;
		    -ms-flex-wrap: nowrap;
		    flex-wrap: nowrap;
		    -webkit-justify-content: center;
		    -ms-flex-pack: center;
		    justify-content: center;
		    -webkit-align-content: center;
		    -ms-flex-line-pack: center;
		    align-content: center;
		    -webkit-align-items: center;
		    -ms-flex-align: center;
		    align-items: center;
		    }

		.flex-item:nth-child(1) {
		    -webkit-order: 0;
		    -ms-flex-order: 0;
		    order: 0;
		    -webkit-flex: 0 1 auto;
		    -ms-flex: 0 1 auto;
		    flex: 0 1 auto;
		    -webkit-align-self: auto;
		    -ms-flex-item-align: auto;
		    align-self: flex-end;
		    }

		.flex-item:nth-child(2) {
		    -webkit-order: 0;
		    -ms-flex-order: 0;
		    order: 0;
		    -webkit-flex: 0 1 auto;
		    -ms-flex: 0 1 auto;
		    flex: 0 1 auto;
		    -webkit-align-self: auto;
		    -ms-flex-item-align: auto;
		    align-self: flex-end
		    }

		.flex-item:nth-child(3) {
		    -webkit-order: 0;
		    -ms-flex-order: 0;
		    order: 0;
		    -webkit-flex: 0 1 auto;
		    -ms-flex: 0 1 auto;
		    flex: 0 1 auto;
		    -webkit-align-self: auto;
		    -ms-flex-item-align: auto;
		    align-self: flex-end
	    }

	    .flex-item:nth-child(4) {
		    -webkit-order: 0;
		    -ms-flex-order: 0;
		    order: 0;
		    -webkit-flex: 0 1 auto;
		    -ms-flex: 0 1 auto;
		    flex: 0 1 auto;
		    -webkit-align-self: auto;
		    -ms-flex-item-align: auto;
		    align-self: flex-end
	    }

	    .flex-item:nth-child(5) {
		    -webkit-order: 0;
		    -ms-flex-order: 0;
		    order: 0;
		    -webkit-flex: 0 1 auto;
		    -ms-flex: 0 1 auto;
		    flex: 0 1 auto;
		    -webkit-align-self: auto;
		    -ms-flex-item-align: auto;
		    align-self: flex-end
	    }

	    .flex-item{
	    	margin-right: 4%;
	    	margin-top: 0.5%;
	    }

	    .info > span {
		  font-family: "Times New Roman", Times, serif;
		  font-size: 40px;
		  font-weight: bold;
		  color: brown;
		}

		.hours{
			color: green;
		}

		.button {
		  border-radius: 4px;
		  background-color: #f4511e;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  font-size: 14px;
		  padding: 10px;
		  width: 100px;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin: 3px;
		}

		.button span {
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.button span:after {
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.button:hover span {
		  padding-right: 25px;
		}

		.button:hover span:after {
		  opacity: 1;
		  right: 0;
		}
		.completed-hours{
			color: #32CD32 !important;
		}

		.sign-out-time-green{
			color: #32CD32 !important;
		}

		.sign-out-time-red{
			color: brown !important;
		}
	</style>
</head>
<body>
	<div class="flex-container">
		<div class="flex-item">
			<textarea class="allstats" style="width: 257px; height: 106px;resize: none;"></textarea>
		</div>

		<div class="flex-item">
			<button class="button calculate"><span>Calculate </span></button>
		</div>

		<div class="flex-item">
			<label class="info">
				<span class="completed-hours" id="completed-hours"></span>
				<span class="completed-hours"> Hours completed</span>
			</label>
		</div>

		<div class="flex-item">
			<label class="info">
				<span class="remain-hours" id="remain-hours"></span>
				<span class="remain-hours"> Hourse Remain</span>
			</label>
		</div>

		<div class="flex-item">
			<label class="info">
				<span id="sign-out-time"></span>
			</label>
		</div>

		<div class="flex-item">
			
		</div>
		
	</div>
</body>
<script type="text/javascript">
	$(".allstats").val($.cookie('inout'));
	$(".calculate").click(function(){
	  var s = 0;
	  var allStats = $(".allstats").val();
	  var tempString = allStats.replace(/:in,/g, "");
	  var tempString = tempString.replace(/:out/g, "");
	  var tempString = allStats.replace(/ in,/g, "");
	  var tempString = tempString.replace(/ out/g, "");
	  $.cookie('inout',tempString);
	  var numbersArray = tempString.split('\n');
	  for (var i = 0; i < numbersArray.length; ++i) {
	  	var tempArray = numbersArray[i].split(' ');
	  	var startDate = new Date("1/1/1900 " + $.trim(tempArray[0]));
	  	if(tempArray[1] === undefined || tempArray[1] === ""){
	  	  var dt = new Date();
		  var time = dt.getHours() + ":" + dt.getMinutes();
		  var endDate = new Date("1/1/1900 " + time);
	  	}else{
			var endDate = new Date("1/1/1900 " + $.trim(tempArray[1]));
		}
		s = parseInt(s) + parseInt(endDate - startDate);
	  }
	  var ms = s % 1000;
	  s = (s - ms) / 1000;
	  var secs = s % 60;
	  s = (s - secs) / 60;
	  var mins = s % 60;
	  var hrs = (s - mins) / 60;
	  $("#completed-hours").html(hrs + ":" + mins + " ");
	  if(hrs >= 8){
	  	$("#sign-out-time").removeClass("sign-out-time-red");
	  	$("#sign-out-time").addClass("sign-out-time-green");
	  	$("#remain-hours").html("0 ");
	  	$("#sign-out-time").html("Let's go home &#9786;");
	  }else{
	  	var hourseconds = hrs * 60 * 60;
	  	var minuteseconds = mins * 60;
	  	var requireHours = 8 * 60 * 60;
	  	var tempSubs = requireHours - (hourseconds + minuteseconds);
	  	var min = tempSubs / 60;
	  	if(min >= 60){
	  		var mins = min % 60;
	  		var hrs = (min - mins) / 60;
	  	}else{
	  		var mins = min;
	  		var hrs = "0";
	  	}
	  	var tempdt = new Date();
	  	$("#sign-out-time").removeClass("sign-out-time-green");
	  	$("#sign-out-time").addClass("sign-out-time-red");
	  	$("#remain-hours").html(hrs + ":" + mins + " ");
	  	var tempDate = new Date(tempdt.getTime() + min*60000);
	  	var tempHour = tempDate.getHours();
	  	var tempMinute = tempDate.getMinutes();
	  	$("#sign-out-time").html("Log out at "+ tempHour +":"+ tempMinute + " &#9785;");
	  }
	});
</script>
</html>
