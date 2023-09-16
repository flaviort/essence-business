<div id='contact-success' class='popup'>
	<div class='wrap'>

		<h2 class='text-bigger'>
			<b>
				Success
			</b>
		</h2>

		<p class='desc'>
			Your message has been received and we will get back to you as soon as possible.
        </p>

		<button class='blue-button magnet' onclick='Fancybox.close();'>
			<span>
				Close
			</span>
		</button>

	</div>
</div>

<div id='contact-error' class='popup'>
	<div class='wrap'>

		<h2 class='text-bigger'>
			<b>
				Error
			</b>
		</h2>

		<p class='desc'>
			An error occurred while submitting your message, please try again in a few minutes. If the problem persists, contact us directly via email: <a href='mailto:<?php echo($email); ?>'><u><?php echo($email); ?></u></a>.
        </p>

		<button class='blue-button magnet' onclick='Fancybox.close();'>
			<span>
				Close
			</span>
		</button>

	</div>
</div>