<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Thông tin liên hệ</h3>
					<div class="content-contact">
						<p>Bin Dino Shop chuyên cung cấp thiết bị điện tử hàng đầu Việt Nam</p>
						<p>
							<strong>Địa chỉ:</strong> 53 Võ Văn Ngân , Linh Chiểu ,TP Thủ Đức
						</p>
						<p>
							<strong>Email: </strong> Bindinoshop@gmail.com
						</p>
						<p>
							<strong>Điện thoại: </strong> 0388888888
						</p>
						<p>
							<strong>Website: </strong> https://bindino.id.vn
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Thông tin khác</h3>
					<div class="content-list">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'container' => 'false',
								'menu_id' => 'footer-menu',
								'menu_class' => 'footer-menu'
							)
						); ?>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Nhận thông báo khi chúng tôi có ưu đãi hoặc sản phâm mới</h3>
					<div class="content-contact">
						<form action="/" method="GET" role="form">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<input type="email" name="" id="unique-email-input" aria-describedby="button-addon2" class="form-control" placeholder="Địa chỉ mail">
								</div>
							</div>
							<button id="button-addon2" type="submit" class="btn-contact">Gửi</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © 2024 HKSHOP All Rights Reserved - Design by THIETKEWEB43.COM</p>
	</div>
</footer>
</div>
<script src="<?php bloginfo('template_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
<!-- email js -->
<script>
	document.addEventListener('DOMContentLoaded', function() {
		emailjs.init('EW46K6RR1EjN6guL4'); // Đảm bảo bạn đã nhập đúng user_id

		document.getElementById('button-addon2').addEventListener('click', function(event) {
			event.preventDefault(); // Ngăn chặn việc gửi form mặc định

			var email = document.getElementById('unique-email-input').value;

			// Hàm kiểm tra định dạng email
			function validateEmail(email) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(String(email).toLowerCase());
			}

			// Kiểm tra nếu email không hợp lệ
			if (!validateEmail(email)) {
				alert('Địa chỉ email không hợp lệ. Vui lòng nhập lại.');
				return;
			}

			var templateParams = {
				email: email
			};

			emailjs.send('service_q402ja5', 'template_kyv2f79', templateParams)
				.then(function(response) {
					console.log('SUCCESS!', response.status, response.text);
					alert('Email đã được gửi thành công!');
				}, function(error) {
					console.log('FAILED...', error);
					alert('Gửi email không thành công. Vui lòng thử lại.');
				});
		});
	});
</script>
<?php wp_footer(); ?>
</body>

</html>