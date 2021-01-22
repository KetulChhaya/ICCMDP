<div class='gallery-main-cotainer'>
	<div class="image-sub-con">
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/1.jpg" alt="gallery-image">
			</div>
		</div>
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/2.jpg" alt="gallery-image">
			</div>
		</div>
	</div>
	<div class="image-sub-con">
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/3.jpg" alt="gallery-image">
			</div>
		</div>
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/4.jpg" alt="gallery-image">
			</div>
		</div>
	</div>
	<div class="image-sub-con">
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/5.jpg" alt="gallery-image">
			</div>
		</div>
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/6.jpg" alt="gallery-image">
			</div>
		</div>
	</div>
	<div class="image-sub-con">
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/7.jpg" alt="gallery-image">
			</div>
		</div>
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/8.jpg" alt="gallery-image">
			</div>
		</div>
	</div>
	<div class="image-sub-con">
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/9.jpg" alt="gallery-image">
			</div>
		</div>
		<div class="gallery-item">
			<div class="image-card">
				<img class="image" src="./assets/images/1.jpg" alt="gallery-image">
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
	var slider = tns({
	container: '.gallery-main-cotainer',
		"items": 3,
		"controls": true,
		"controlsText" : ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
		"autoplay": false,
		"slideBy": "1",
		"startIndex": 0,
		"mouseDrag": false,
		"loop": false,
		"responsive": {
		"100": {
			"items": 1
		},
		"700": {
			"items": 2
		},
		"1100": {
			"items" : 3
		}
		},
		"nav": true,
		"navPosition": 'bottom',
		"swipeAngle": false,
		"speed": 400
	});
</script>