<!DOCTYPE html>
<html>
	<head>
		<meta
			name="author"
			content="Behar Rexhepi, Zgjim Haziri, Xhemil Gota"
		/>
		<meta
			name="description"
			content="Projekti ne lenden Programimi ne WWW - Grupi 9"
		/>

		<link rel="icon" type="image/png" href="img/logo.png" />

		<script src="js/search.js"></script>

		<title>Top 10</title>

		<style>
			* {
				margin: 0;
				font-family: "georgia";
			}

			body {
				border-top: 5px #40aed7 solid;
			}

			#wrapper {
				width: 1000px;
				margin: auto;
				overflow-x: hidden;
				margin-bottom: 20px;
			}

			header {
				margin-left: 20px;
				margin-right: 20px;
				margin-bottom: 50px;
				border-bottom: 1px solid #d6d6d6;
			}

			#searchBar {
				background-color: #e9e9e9;
				width: 245px;
				height: 36px;
				border-radius: 7px;
				text-align: left;
				font-size: 12px;
				border: none;
				outline: none;
				padding-left: 8px;
				box-sizing: border-box;
			}

			input[type="button"] {
				background-color: #40add6;
				color: white;
				border: none;
				outline: none;
				cursor: pointer;
				box-sizing: border-box;
				border-radius: 7px;
			}

			#searchButton {
				width: 68px;
				height: 36px;
				font-size: 12px;
			}

			.search {
				margin-top: 25px;
				position: relative;
				left: 642px;
			}

			#pageName {
				background-color: #ededed;
				height: 120px;
				border-radius: 10px;
				margin-left: 20px;
				margin-right: 20px;
			}

			#pageName h1 {
				font-size: 30px;
				padding-top: 40px;
				padding-bottom: 40px;
				padding-left: 25px;
			}

			#pageName h1::first-letter {
				font-size: 30px;
			}

			.title {
				margin-top: -6px;
			}

			.caption {
				margin-top: 4px;
				margin-bottom: 27px;
				font-size: 12px;
				color: #999999;
				margin-left: 2px;
			}

			h1 {
				font-family: "task small caps";
				font-size: 30px;
				color: #333333;
				text-transform: uppercase;
			}

			h1::first-letter {
				font-size: 36px;
			}

			nav {
				float: right;
			}

			nav ul li {
				list-style: none;
				display: inline-block;
				text-align: left;
				padding-left: 17px;
				position: relative;
			}

			nav ul li:hover ul {
				display: block;
			}

			nav ul li a {
				text-decoration: none;
				color: #666666;
				font-size: 13px;
			}

			nav ul li a:active {
				color: #40aed7;
				text-transform: uppercase;
			}

			nav ul li a:hover {
				color: #40aed7;
			}

			nav ul li ul {
				display: none;
				position: absolute;
				background-color: white;
				width: 155px;
				padding-top: 5px;
				margin: 0 5px 0 5px;
			}

			nav ul li ul li {
				text-align: center;
				padding: 5px 5px;
			}

			nav ul li ul li a {
				font-size: 13px;
			}

			section {
				margin-left: 20px;
				margin-right: 20px;
			}

			footer {
				background: #1b1b1b;
				width: 100%;
				margin-top: 1px;
			}

			#body-part {
				border-bottom: 1px solid #a4a4a4;
			}

			#footer-bottom {
				background: #161616;
				margin-top: 33px;
			}

			div h3 {
				font-family: "Georgia";
				font-size: 16px;
				font-weight: lighter;
				color: #ffffff;
			}

			#Company-details {
				padding-left: 20px;
				padding-top: 33px;
				display: inline-block;
			}

			footer p,
			address,
			a {
				color: #979797;
				text-decoration: none;
			}

			span {
				color: #40aed7;
				font-weight: lighter;
			}

			#news-events {
				display: inline-block;
				vertical-align: top;
				padding-left: 123px;
				padding-top: 33px;
			}

			#news-events p {
				position: relative;
				top: 40px;
				margin-bottom: 22px;
				line-height: 20px;
			}

			#news-events h4 {
				position: relative;
				top: 33px;
			}

			#up-to-date {
				display: inline-block;
				vertical-align: top;
				padding-top: 33px;
				padding-left: 65px;
			}

			#up-to-date p {
				padding-top: 33px;
			}

			#up-to-date input {
				margin-top: 20px;
			}

			#up-to-date input[type="text"] {
				background: #1b1b1b;
				border: #161616 solid 1px;
				padding: 9px 33px 9px 10px;
				border-radius: 6px;
				margin-right: 10px;
			}

			#up-to-date input[type="button"] {
				background: #1b1b1b;
				color: #40aed7;
				border: #161616 solid 1px;
				padding: 10px;
			}

			#copyright {
				display: inline-block;
				padding-left: 20px;
			}

			#template-origin {
				display: inline-block;
				float: right;
				padding-right: 20px;
			}

			footer p,
			address,
			h4 {
				font-size: 13px;
				font-family: "Georgia";
				font-style: normal;
			}

			address,
			#contact {
				line-height: 20px;
				margin: 30px 0px;
			}

			#footer-bottom {
				padding: 25px 0;
			}

			#footer-bottom p {
				color: #ffffff;
				font-weight: lighter;
			}

			#footer-wrapper,
			#footer-bottom div {
				width: 1000px;
				margin: auto;
			}

			.dd_div {
				display: inline-block;
				float: none;
				width: 45px;
				height: 45px;
				margin-top: 40px;
				margin-right: 20px;
			}

			svg {
				margin-top: 40px;
				margin-left: 25px;
			}

			#table {
				margin: 0px 0 70px 50px;
				font-size: 0.9em;
				border-radius: 5px 5px 0 0;
				box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			}

			#table th,
			#table td {
				width: 275px;
				height: 40px;
				font-family: myFont;
			}

			#table thead tr {
				background-color: #40add6;
				color: #ffffff;
				text-align: left;
				font-weight: bold;
			}

			#table tbody tr {
				border-bottom: 1px solid #dddddd;
			}

			#table tbody tr:nth-of-type(even) {
				background-color: #f3f3f3;
			}

			#table tbody tr:last-of-type {
				border-bottom: 2px solid #40add6;
			}

			#table caption {
				text-align: left;
				padding: 10px 10px;
				font-size: 18px;
				font-style: italic;
			}

			@font-face {
				font-family: myFont;
				src: url(font/font1.ttf);
			}
		</style>
	</head>

	<body>
		<div id="body-part">
			<!--Wrapper div used to work with this part as a whole-->
			<div id="wrapper">
				<?php include("menu.php");?>

				<div id="pageName">
					<h1>Top 10</h1>
				</div>

				<svg height="70" width="600">
					<text x="30" y="45" fill="black" style="font-size: 30px;">
						The top 10
					</text>
					<text x="220" y="45" fill="black" style="font-size: 30px;">
						, rated by our experts:
					</text>
					<polygon
						points="10,19.5 30,1 50,19.5"
						style="
							stroke-width: 1;
							stroke: rgb(0, 0, 0);
							fill: #40add6;
						"
						transform="translate(165,5)"
					/>
					<rect
						width="40"
						height="35"
						style="
							fill: #40add6;
							stroke-width: 1;
							stroke: rgb(0, 0, 0);
						"
						transform="translate(175,25)"
					/>
					<rect
						width="10"
						height="8"
						style="
							fill: rgb(255, 255, 255);
							stroke-width: 1;
							stroke: rgb(0, 0, 0);
						"
						transform="translate(179,29)"
					/>
					<rect
						width="10"
						height="8"
						style="
							fill: rgb(255, 255, 255);
							stroke-width: 1;
							stroke: rgb(0, 0, 0);
						"
						transform="translate(201,29)"
					/>
					<rect
						width="10"
						height="11"
						style="
							fill: rgb(255, 255, 255);
							stroke-width: 1;
							stroke: rgb(0, 0, 0);
						"
						transform="translate(190,49)"
					/>
				</svg>

				<table border="1" cellpadding="10" cellspacing="0" id="table">
					<thead>
						<tr>
							<th>House</th>
							<th>City</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>10250 W SUNSET</td>
							<td>Bel-Air</td>
							<td>$8,000,000</td>
						</tr>
						<tr>
							<td>277 Saint Pierre Rd</td>
							<td>Los Angeles</td>
							<td>$7,200,000</td>
						</tr>
						<tr>
							<td>950 Lombard St</td>
							<td>San Francisco</td>
							<td>$6,500,000</td>
						</tr>
						<tr>
							<td>2646 Union St</td>
							<td>San Francisco</td>
							<td>$5,000,000</td>
						</tr>
						<tr>
							<td>2799 Broadway St</td>
							<td>San Francisco</td>
							<td>$3,500,000</td>
						</tr>
						<tr>
							<td>2590 Green St</td>
							<td>San Francisco</td>
							<td>$2,900,000</td>
						</tr>
						<tr>
							<td>22648 Pacific Coast Highway</td>
							<td>Malibu</td>
							<td>$2,500,000</td>
						</tr>
						<tr>
							<td>632 W Deming Pl</td>
							<td>Chicago</td>
							<td>$1,700,000</td>
						</tr>
						<tr>
							<td>1218 Roberto Lane</td>
							<td>Los Angeles</td>
							<td>$2,450,000</td>
						</tr>
						<tr>
							<td>602 Birdsall St</td>
							<td>Houston</td>
							<td>$2,000,000</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<?php include("footer.php");?>
		<script src="js/general.js" onload="changeColorOfMenu('buy')"></script>
	</body>
</html>
