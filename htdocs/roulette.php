<?php
include_once('src/db.php');
?>

<html>
	<head>
		<link rel="stylesheet" href="dist/owl.carousel.min.css">
		<?php include('src/head.php'); ?>
		<meta http-equiv="refresh" content="<?php echo $secrefresh?>;URL='<?php echo $page?><?php if($past == 1) echo "?past=1";?>'">
		<script src="dist/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js"></script>
		<script src="dist/jquery.countdown360.min.js"></script>
	</head>
	<body>
		<?php include('navbar.php'); ?>
		<div id="overlay">
			<div style="position:absolute;z-index:10;margin-top:15%;margin-left:30%;background-color:#1d2c3b;width:30%;height:50%">
				<a href="#" style="float:right;color:white;text-decoration:none;font-size:24;margin-right:5" onclick="closeOver()">x</a>
				<center><p style="display:inline;color:white;margin-left:2px;margin-top:2px">x35 (Any number)</p><br></center>
				<button id="morebets" onClick="betRoulette(100)">&nbsp0&nbsp</button>
				<button id="morebets" onClick="betRoulette(137)">00</button>
				<button id="morebets" onClick="betRoulette(101)">&nbsp1&nbsp</button>
				<button id="morebets" onClick="betRoulette(102)">&nbsp2&nbsp</button>
				<button id="morebets" onClick="betRoulette(103)">&nbsp3&nbsp</button>
				<button id="morebets" onClick="betRoulette(104)">&nbsp4&nbsp</button>
				<button id="morebets" onClick="betRoulette(105)">&nbsp5&nbsp</button>
				<button id="morebets" onClick="betRoulette(106)">&nbsp6&nbsp</button>
				<button id="morebets" onClick="betRoulette(107)">&nbsp7&nbsp</button>
				<button id="morebets" onClick="betRoulette(108)">&nbsp8&nbsp</button>
				<button id="morebets" onClick="betRoulette(109)">&nbsp9&nbsp</button>
				<button id="morebets" onClick="betRoulette(110)">10</button>
				<button id="morebets" onClick="betRoulette(111)">11</button>
				<button id="morebets" onClick="betRoulette(112)">12</button>
				<button id="morebets" onClick="betRoulette(113)">13</button>
				<button id="morebets" onClick="betRoulette(114)">14</button>
				<button id="morebets" onClick="betRoulette(115)">15</button>
				<button id="morebets" onClick="betRoulette(116)">16</button>
				<button id="morebets" onClick="betRoulette(117)">17</button>
				<button id="morebets" onClick="betRoulette(118)">18</button>
				<button id="morebets" onClick="betRoulette(119)">19</button>
				<button id="morebets" onClick="betRoulette(120)">20</button>
				<button id="morebets" onClick="betRoulette(121)">21</button>
				<button id="morebets" onClick="betRoulette(122)">22</button>
				<button id="morebets" onClick="betRoulette(123)">23</button>
				<button id="morebets" onClick="betRoulette(124)">24</button>
				<button id="morebets" onClick="betRoulette(125)">25</button>
				<button id="morebets" onClick="betRoulette(126)">26</button>
				<button id="morebets" onClick="betRoulette(127)">27</button>
				<button id="morebets" onClick="betRoulette(128)">28</button>
				<button id="morebets" onClick="betRoulette(129)">29</button>
				<button id="morebets" onClick="betRoulette(130)">30</button>
				<button id="morebets" onClick="betRoulette(131)">31</button>
				<button id="morebets" onClick="betRoulette(132)">32</button>
				<button id="morebets" onClick="betRoulette(133)">33</button>
				<button id="morebets" onClick="betRoulette(134)">34</button>
				<button id="morebets" onClick="betRoulette(135)">35</button>
				<button id="morebets" onClick="betRoulette(136)">36</button><br>
				<center><p style="display:inline;color:white;margin-left:2px;margin-top:2px">x3</p><br>
				<button id="morebets" onClick="betRoulette(4)">&nbsp1&nbsp - 12</button>
				<button id="morebets" onClick="betRoulette(5)">13 - 24</button>
				<button id="morebets" onClick="betRoulette(6)">25 - 36</button><br>
				<center><p style="display:inline;color:white;margin-left:2px;margin-top:2px">x2</p><br>
				<button id="morebets" onClick="betRoulette(7)">Odd (1, 3, 5, ..., 35)</button>
				<button id="morebets" onClick="betRoulette(8)">Even (2, 4, 6, ..., 36)</button></center>
			</div>
		</div>
		<div id="messages-box">
			<p id="messages" style="display:inline"></p>
			<a href="#" id="closeMessage" onclick="closeMessage()"></a>
		</div>
		<div class="roulette-body">
			<center><h1 style="display:inline">Roulette </h1><b><a href="games.php" style="display:inline;text-decoration:none;color:black;">(Go back) </a></b>
			<div class="roulette-box">
				<div class="roulette-sign"></div>
				<div class="owl-carousel">
				  <div class="roulette" id="green" data-hash="0" > 0 </div>
				  <div class="roulette" id="red" data-hash="1" > 1 </div>
				  <div class="roulette" id="black" data-hash="13" > 13 </div>
				  <div class="roulette" id="red" data-hash="36" > 36 </div>
				  <div class="roulette" id="black" data-hash="24" > 24 </div>
				  <div class="roulette" id="red" data-hash="3" > 3 </div>
				  <div class="roulette" id="black" data-hash="15" > 15 </div>
				  <div class="roulette" id="red" data-hash="34" > 34 </div>
				  <div class="roulette" id="black" data-hash="22" > 22 </div>
				  <div class="roulette" id="red" data-hash="5" > 5 </div>
				  <div class="roulette" id="black" data-hash="17" > 17 </div>
				  <div class="roulette" id="red" data-hash="32" > 32 </div>
				  <div class="roulette" id="black" data-hash="20" > 20 </div>
				  <div class="roulette" id="red" data-hash="7" > 7 </div>
				  <div class="roulette" id="black" data-hash="11" > 11 </div>
				  <div class="roulette" id="red" data-hash="30" > 30 </div>
				  <div class="roulette" id="black" data-hash="26" > 26 </div>
				  <div class="roulette" id="red" data-hash="9" > 9 </div>
				  <div class="roulette" id="black" data-hash="28" > 28 </div>
				  <div class="roulette" id="green" data-hash="zz" > 00 </div>
				  <div class="roulette" id="black" data-hash="2" > 2 </div>
				  <div class="roulette" id="red" data-hash="14" > 14 </div>
				  <div class="roulette" id="black" data-hash="35" > 35 </div>
				  <div class="roulette" id="red" data-hash="23" > 23 </div>
				  <div class="roulette" id="black" data-hash="4" > 4 </div>
				  <div class="roulette" id="red" data-hash="16" > 16 </div>
				  <div class="roulette" id="black" data-hash="33" > 33 </div>
				  <div class="roulette" id="red" data-hash="21" > 21 </div>
				  <div class="roulette" id="black" data-hash="6" > 6 </div>
				  <div class="roulette" id="red" data-hash="18" > 18 </div>
				  <div class="roulette" id="black" data-hash="31" > 31 </div>
				  <div class="roulette" id="red" data-hash="19" > 19 </div>
				  <div class="roulette" id="black" data-hash="8" > 8 </div>
				  <div class="roulette" id="red" data-hash="12" > 12 </div>
				  <div class="roulette" id="black" data-hash="29" > 29 </div>
				  <div class="roulette" id="red" data-hash="25" > 25 </div>
				  <div class="roulette" id="black" data-hash="10" > 10 </div>
				  <div class="roulette" id="red" data-hash="27" > 27 </div>
				</div>
			</div><br><br>
			<center>
				<div id="last1" class="lastRolls"></div>
				<div id="last2" class="lastRolls"></div>
				<div id="last3" class="lastRolls"></div>
				<div id="last4" class="lastRolls"></div>
				<div id="last5" class="lastRolls"></div>
			</center><br>
			<div id="progressText"></div>
			<progress id="progress" value="0" max="100"></progress>
			<br><br>
			<h5 id="betn" style="margin:0">Bet</h5><input type="number" step=".001" min="0.001" value="1" pattern="\d+(\.\d{2})?" id="bet" name="bet"></center><br>
			<center><div style="width:20%;display:inline-block;height:50%;vertical-align:top">
				<center>
					<input type="submit" value="Red (x2)" id="btn1" disabled onClick="betRoulette(1)"></input><br><br>
					<h4 style="margin:0" id="totalRed">Loading...</h4>
					<div style="width:100%;height:2px;background-color:black"></div><br>
					<div id="contentRed" style="width:100%;">
						
					</div>
				</center>
			</div>
			<div style="width:20%;display:inline-block;height:50%;vertical-align:top">
				<center>
					<input type="submit" value="Black (x2)" disabled id="btn2" onClick="betRoulette(2)"></input><br><br>
					<h4 style="margin:0" id="totalBlack">Loading...</h4>
					<div style="width:100%;height:2px;background-color:black"></div><br>
					<div id="contentBlack" style="width:100%;">
					
					</div>
				</center>
			</div>
			<div style="width:20%;display:inline-block;height:50%;vertical-align:top">
				<center>
					<input type="submit" value="Green (x14)" id="btn3" disabled onClick="betRoulette(3)"></input><br><br>
					<h4 style="margin:0" id="totalGreen">Loading...</h4>
					<div style="width:100%;height:2px;background-color:black"></div><br>
					<div id="contentGreen" style="width:100%;">
					
					</div>
				</center>
			</div>
			<div style="width:20%;display:inline-block;height:50%;vertical-align:top">
				<center>
					<button disabled id="btn4" onclick="moreBets()">More bet options...</button><br><br>
					<h4 style="margin:0" id="totalCustom">Loading...</h4>
					<div style="width:100%;height:2px;background-color:black"></div><br>
					<div id="contentCustom" style="width:100%;">
					
					</div>
				</center>
			</div></center>
		</div>
		<center>
			<p id="hash"></p>
			<p id="secret"></p>
		</center>
		<script>
			var owl, i;
			$(document).ready(function() {
 
				owl = $('.owl-carousel');
				owl.owlCarousel({
					loop:true,
					margin:0,
					nav:false,
					URLhashListener:true,
					startPosition: 'URLHash',
					touchDrag: false,
					mouseDrag: false,
					autoWidth:true,
					center: true,
					responsive:{
						0:{
							items:3
						},
						600:{
							items:5
						},
						1000:{
							items:7
						}
					}
				});

				connect();
			});
			function roll(howMuch) {
				i++;
				if(i < howMuch) {
					owl.trigger('next.owl.carousel', [100]);
					setTimeout(function() {roll(howMuch);}, 80);
				} else {
					var currentUrl = window.location.href;
					currentUrl = currentUrl.replace(currentUrl.substring(currentUrl.indexOf("#")+1), "");
					if(lastRoll != 37)	
						currentUrl = currentUrl + lastRoll;
					else
						currentUrl = currentUrl + "zz";
					window.location.href = currentUrl;
				}
			}
			function moreBets() {
				document.getElementById("overlay").style.display = "block";
			}
			
			function closeOver () {
				document.getElementById("overlay").style.display = "none";
			}
		</script>
		<script src="js/roulette.js"></script>
		<?php include('src/footer.php'); ?>
	</body>
</html>