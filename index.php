	<!DOCTYPE html>
	<html>
	<head>  <!-- Mustafa Gamal Developer -->
		<meta http-equiv="refresh" content="2;url=/home">
		<link rel = "icon" href="images/icon/icon.png" type = "image/x-icon">
		<title>Loading...</title>
	</head>
		<body>
			<div class="loader">
				<img style="width:100%; height:200px;" src="images/logo/logo1.gif">

			  <div class="inner one"></div>
			  <div class="inner two"></div>
			  <div class="inner three"></div>
			</div>

		</body>
<style>
html {
  height: 100%;
}

body {
	background-color: #1c1712;
  text-align: center;
}

.loader {
  position: absolute;
  top: calc(50% - 32px);
  left: calc(50% - 32px);
  width: 164px;
  height: 164px;
  border-radius: 50%;
  perspective: 800px;
  margin-left: -60px;
  margin-top: -50px;
}

.inner {
  position: absolute;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.inner.one {
  left: 0%;
  top: 0%;
  animation: rotate-one 1s linear infinite;
  border-bottom: 3px solid #fff;
}

.inner.two {
  right: 0%;
  top: 0%;
  animation: rotate-two 1s linear infinite;
  border-right: 3px solid #444;
}

.inner.three {
  right: 0%;
  bottom: 0%;
  animation: rotate-three 1s linear infinite;
  border-top: 3px solid #fff;
}

@keyframes rotate-one {
  0% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
  }
}

@keyframes rotate-two {
  0% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
  }
}

@keyframes rotate-three {
  0% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
  }
}
</style>
</html>
    <!-- Mustafa Gamal Developer -->