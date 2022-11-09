<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
	/* CSS Resets */
* {
	padding:0;
	margin:0;
}
body{
    background-color: white;
}
img {
	max-width: 100%;
	height: auto;
}
button{
    background-color:none;
}
a{
    text-decoration: none;
}
ul,ol {
	list-style-type: none;
}
/* end css reset */

.container {	/* posisikan letak slidernya */
	margin:1% auto;
	position: relative;
	overflow: hidden;
}
.container, ul.slide li img{
	width:500px; /* Sesuaikan sendiri */
	height: 300px;  /* Sesuaikan sendiri */
}


ul.slide {
	position: absolute;
	display: block;
	width:500%;  /* <-- Angka 3 Bergantung pada jumlah slide */
}

.caption {	/* styling untuk deskripsi setiap slide */
	position: absolute;
	background-color: rgba(0,0,0,0.5);
	bottom:0;
	padding:10px;
	color:#fff;
	left: 0;
	right: 0;
}

/* Yang membuatnya jadi slider */
	ul.slide li {
  		display: inline-block;
  		float: left;
  		-webkit-box-sizing:border-box;
  		-moz-box-sizing:border-box;
  		ox-sizing:border-box;
  		-webkit-transition: -webkit-transform 2000ms;
  		-moz-transition: -moz-transform 2000ms;
  		transition: -webkit-transform 2000ms, transform 2000ms;
	}
	ul.slide li.slide-1 {
		left: 0%;
	}
	ul.slide li.slide-2 {
		left: 100%;
	}
	ul.slide li.slide-3 {
		left: 200%;
	}
	ul.slide li.slide-4 {
		left: 300%;
	}
	ul.slide li.slide-5 {
		left: 400%;
	
	}
	#nav-1:checked ~ ul.slide li{
	  	-webkit-transform: translateX(0%);
		-moz-transform: translateX(0%);
	  	transform: translateX(0%);
	}
	#nav-2:checked ~ ul.slide li{
	  	-webkit-transform: translateX(-100%);
	  	-moz-transform: translateX(-100%);
	 	transform: translateX(-100%);
	}
	#nav-3:checked ~ ul.slide li {
	  	-webkit-transform: translateX(-200%);
	  	-moz-transform: translateX(-200%);
	  	transform: translateX(-200%);
	}
	#nav-4:checked ~ ul.slide li {
	  	-webkit-transform: translateX(-300%);
	  	-moz-transform: translateX(-300%);
	  	transform: translateX(-300%);
	}
	#nav-5:checked ~ ul.slide li {
	  	-webkit-transform: translateX(-400%);
	  	-moz-transform: translateX(-400%);
	  	transform: translateX(-400%);
	}
/* End, yang membuatnya jadi slider */


/* Navigator */

.radio-nav { /* menghilangkan radio button */
	display: none;
}
	
	/* styling untuk tombol next dan previous slide */
	.nav-arrow {
		position: absolute;
		top:45%;
		width:50px;
		height: 50px;
	}
	.nav-next {
		right:10px;
	}
	.nav-prev {
		left:10px;
	}
	.nav-arrow label {
		-webkit-transition:all 0.3s;
		-moz-transition:all 0.3s;
		transition:all 0.3s;
		background-color: rgba(0,0,0,0.3);
		color: #fff;
		border-radius: 50%;
		display: block;
		position: absolute;
		padding:15px 20px;
		cursor: pointer;
		z-index: 1;
		opacity: 0;
		font-weight: bold;
		line-height: 1;
	}
	.container:hover .nav-arrow label{
		background-color: rgba(0,0,0,0.7);
	}
	/* end styling untuk tombol next dan previous slide */
	/*Setiap slide mempunya tombol prev dan next-nya masing-masing. Nah, tampilkan tombol yang tepat dengan kode dibawah ini*/ 
	#nav-1:checked ~ .nav-prev label.nav-5,
	#nav-1:checked ~ .nav-next label.nav-2,
	#nav-2:checked ~ .nav-prev label.nav-1,
	#nav-2:checked ~ .nav-next label.nav-3,
	#nav-3:checked ~ .nav-prev label.nav-2,
	#nav-3:checked ~ .nav-next label.nav-4,
	#nav-4:checked ~ .nav-prev label.nav-3,
	#nav-4:checked ~ .nav-next label.nav-5,
	#nav-5:checked ~ .nav-prev label.nav-4,
	#nav-5:checked ~ .nav-next label.nav-1 {
		z-index: 2;
		opacity: 1;
	}
	/* end */

/* Navigator */
</style>
</head>
<body>
    <center><button>
<a href="http://localhost:83/PHP%20SENTRA/Home%20JKW.php">Home</a></button><br>
<button><a href="http://localhost:83/PHP%20SENTRA/Project%20sentra.php">Log Out</a></button>
<button><a href="http://localhost:83/PHP%20SENTRA/Pembelian.php">Pesan</a></button>
<button><a href="http://localhost:83/PHP%20SENTRA/Kritik%20Dan%20Saran.php">Kritik Dan Saran</a></button>
<br>
    <h1>Tentang JKW Fried Chicken</h1><br>
    <p>JKW didirikan oleh Kolonel Joko Warsono (1890–1980),</P>
    <p>seorang pengusaha yang mulai menjual ayam goreng dari restoran pinggir jalan di Tanjung Duren, selama gabut.</P>
    <p>Joko mengidentifikasi potensi konsep waralaba restoran, dan waralaba "JKW Fried Chicken" pertama dibuka pada tahun 1952.</P>
    <br>
    Temukan Kami Di Sosial Media
    <br>
	<a href="https://www.instagram.com/instagram/">
    <img src="ig.jpg" width="50" height="50"></a>
    <a href="https://www.youtube.com/">
	<img src="yt.png" width="50" height="50"></a>
	<br>
    <p>Temukan Kami Di Dekat Rumah Anda</p>
      <p>-Cabang Kemanggisan-</p>
      <p>-Cabang Rawa Belong-</p>
      <p>-Cabang Tanjung Duren-</p>
      <p>-Cabang Slipi-</p>
      <p>-Cabang Puri-</p>

<br>
    <h3>Foto Foto JKW Fried Chicken</h3>
<div class="container">
	<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
	<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-3"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-4"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-5"/>

	<ul class="slide">
		<li class="slide-1">
			<img src="11.jpg"/>
		</li>
		<li class="slide-2">
			<img src="12.jpeg"/>
		</li>
		<li class="slide-3">
			<img src="13.jpg"/>
		</li>
		<li class="slide-4">
			<img src="14.jpg"/>
		</li>
		<li class="slide-5">
			<img src="15.jpg"/>
		</li>
	</ul>

	<div class="nav-arrow nav-next">
		<label class="nav-1" for="nav-1">></label>
		<label class="nav-2" for="nav-2">></label>
		<label class="nav-3" for="nav-3">></label>
		<label class="nav-4" for="nav-4">></label>
		<label class="nav-5" for="nav-5">></label>
	</div>
	<div class="nav-arrow nav-prev">
		<label class="nav-1" for="nav-1"><</label>
		<label class="nav-2" for="nav-2"><</label>
		<label class="nav-3" for="nav-3"><</label>
		<label class="nav-4" for="nav-4"><</label>
		<label class="nav-5" for="nav-5"><</label>
	</div>

</center>
</body>
<center>
<hr><footer>©JKW Fried Chicken 2022</footer>
    </center>
</html>