<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
.malasngoding-slider { 
	border: 10px solid #efefef; 
	position: relative; 
	overflow: hidden; 
	background: #efefef;
}
 
.malasngoding-slider { 
	margin:20px auto;
	width: 768px;
	height: 450px; 
}
 
.isi-slider img { 
	width: 768px;
	height: 450px; 
	float: left;
}
 
.isi-slider { 
	position: absolute; 
	width:3900px;  
 
	/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
	animation-name:slider;
	animation-duration:16s;
	animation-timing-function: ease-in-out;
	animation-iteration-count:infinite;
	-webkit-animation-name:slider;
	-webkit-animation-duration:16s;
	-webkit-animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count:infinite;
	-moz-animation-name:slider;
	-moz-animation-duration:16s;
	-moz-animation-timing-function: ease-in-out;
	-moz-animation-iteration-count:infinite;
	-o-animation-name:slider;
	-o-animation-duration:16s;
	-o-animation-timing-function: ease-in-out;
	-o-animation-iteration-count:infinite;
}
 
 
/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
.isi-slider:hover { 
	-webkit-animation-play-state:paused; 
	-moz-animation-play-state:paused; 
	-o-animation-play-state:paused; 
	animation-play-state:paused; }

 
.isi-slider img { 
	float: right; 
}
 
.malasngoding-slider:after { 
	font-size: 150px; 
	position: absolute; 
	z-index: 12; 
	color: rgba(255,255,255, 0); 
	left: 300px; top: 80px; 
	-webkit-transition: 1s all ease-in-out; 
	-moz-transition: 1s all ease-in-out; 
	transition: 1s all ease-in-out; 
}
 
.malasngoding-slider:hover:after { 
	color: rgba(255,255,255, 0.6);  
}
 
 
 
@-moz-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}       
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 
 
@-webkit-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}       
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 
 
 
@keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}     
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0; 
	} 
 
	100% {
		left: 0; opacity: 0; 
	}
}
        </style>
    <center>
    <h1>Selamat Datang Di JKW Fried Chicken</h1>
</center>
<hr>
</head>
<body><center>
<h3>Ingin Apa Hari Ini?</h3><button>
<a href="http://localhost:83/PHP%20SENTRA/Project%20sentra.php">Log Out</a></button>
<br>
<button><a href="http://localhost:83/PHP%20SENTRA/Pembelian.php">Pesan</a></button>
<button><a href="http://localhost:83/PHP%20SENTRA/about%20us.php">About Us</a></button>
<button><a href="http://localhost:83/PHP%20SENTRA/Kritik%20Dan%20Saran.php">Kritik Dan Saran</a></button>
<div class=malasngoding-slider>
		<div class=isi-slider>
			<img src="paket ricebox.jpg" alt="Gambar 1">
			<img src="paket anak.jpg" alt="Gambar 2">
			<img src="paket bucket.jpg" alt="Gambar 3">
		</div>
	</div>
<hr>
</body>
<center>
<footer>©JKW Fried Chicken 2022</footer>
    </center>
</html>