<!-- service-panel start -->
	<div class="service_panel">
		<div class="container">

			<!-- Swiper -->
			<div class="swiper serviceSwiper" data-aos="fade-up">
				<div class="swiper-wrapper" style="padding: 50px 50px;">

					<!-- Slide 1 -->
					<div class="swiper-slide" data-aos="fade-up">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon01.png" alt="">Total Care Staffing Solution</h3>
							<p class="text-common">
								Highly trained clinical and non-clinical professionals for hospitals, aged care, and community settings—providing the people who make excellence possible.
							</p>
						</div>
					</div>

					<!-- Slide 2 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="150">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care Tech</h3>
							<p class="text-common">
								Smart, secure IT solutions that streamline healthcare operations and enhance data security.
							</p>
						</div>
					</div>

					<!-- Slide 3 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon01.png" alt="">Total Care Wellness & Weight Loss</h3>
							<p class="text-common">
								Personalised wellness programs, lifestyle guidance, and sustainable health management for long-term wellbeing.
							</p>
						</div>
					</div>

					<!-- Slide 4 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="450">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care Med Supplies</h3>
							<p class="text-common">
								Reliable medical equipment and consumables to support safe, effective, and efficient care delivery.
							</p>
						</div>
					</div>

					<!-- Slide 5 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="600">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon01.png" alt="">Country Nursing Community Care</h3>
							<p class="text-common">
								Bridging healthcare gaps in rural and regional communities through personalised nursing and care services.
							</p>
						</div>
					</div>

					<!-- Slide 6 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="750">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care Gold Care</h3>
							<p class="text-common">
								Premium, tailored aged care services designed to provide comfort, dignity, and high-quality support.
							</p>
						</div>
					</div>

					<!-- Slide 7 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="900">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon01.png" alt="">Total Care Health Foundation</h3>
							<p class="text-common">
								Supporting community health initiatives, research, and programs that improve access to care for all.
							</p>
						</div>
					</div>

					<!-- Slide 8 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="1050">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care Virtual Health</h3>
							<p class="text-common">
								Accessible, high-quality healthcare delivered remotely, empowering patients to receive care from anywhere.
							</p>
						</div>
					</div>

					<!-- Slide 9 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="1050">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care At Home</h3>
							<p class="text-common">
								Accessible, high-quality healthcare delivered remotely, empowering patients to receive care from anywhere.
							</p>
						</div>
					</div>

					<!-- Slide 10 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="1050">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care Policies and Procedures Suite</h3>
							<p class="text-common">
								Accessible, high-quality healthcare delivered remotely, empowering patients to receive care from anywhere.
							</p>
						</div>
					</div>

					<!-- Slide 11 -->
					<div class="swiper-slide" data-aos="fade-up" data-aos-delay="1050">
						<div class="block">
							<h3 class="service_title"><img width="20px" style="margin-right: 15px;" src="./images/leaf-icon02.png" alt="">Total Care Tech</h3>
							<p class="text-common">
								Accessible, high-quality healthcare delivered remotely, empowering patients to receive care from anywhere.
							</p>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<div class="swiper-pagination"></div>

			</div>

		</div>
	</div>
	<style>
		.block {
			background: #fff;
			padding: 25px;
			border-radius: 12px;
			box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			width: 100%;
			height: 250px;
		}

		.service_title {
			font-size: 18px;
			margin-bottom: 12px;
			font-weight: 600;
		}

		.swiper-slide {
			height: auto;
			display: flex;
		}
	</style>

	<!-- service-panel end -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

	<script>
		const serviceSwiper = new Swiper(".serviceSwiper", {
			loop: true,
			spaceBetween: 24,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
				},
				576: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
				1200: {
					slidesPerView: 4,
				},
			},
		});
	</script>