<body style="margin:0px;padding:0px;font-family: Tahoma;">
	<section style="background:#004288; height: 100%; width: 100%;">
		<div style="min-width: 400px; max-width: 600px; margin: 0px auto; padding: 50px;">
			<div style="background: #ffffff; margin: 20px 0px; padding: 30px 20px; border-radius: 30px;">
				<div style="text-align: center; font-size: 25px; font-family: inherit;">Reset Password</div>
				<p style="color:#747474; text-align: center; font-size: 18px; font-family: Tahoma;">Please use this one time link to reset your grievance account password. If you have not requested for a password request kindly ignore this mail.</p>
				<div style="text-align:center;">
					<a href="<?= $link; ?>" style="display: inline-block; padding: 15px 20px; background: #004288; font-size:20px; text-decoration: none; color: #ffffff; font-family: inherit;border-radius: 10px;"> Reset Password </a>
					<br><br>
					<div>OR</div>
					<p style="color:#004288"> <?= $link; ?></p>
					<p>Use this above link and put it into your browser's address bar then hit enter to continue.</p>
					&copy; <?= date('Y'); ?> All Rights Reserved
				</div>
			</div>
		</div>
	</section>
</body>