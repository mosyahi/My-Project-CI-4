<script src="<?= base_url() ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>bootstrap/all.min.js"></script>
<script>
	document.getElementById('togglePassword').addEventListener('click', function() {
		var passwordInput = document.getElementById('password');
		var eyeIcon = document.getElementById('eyeIcon');
		var eyeSlashIcon = document.getElementById('eyeSlashIcon');

		if (passwordInput.type === 'password') {
			passwordInput.type = 'text';
			eyeIcon.style.display = 'block';
			eyeSlashIcon.style.display = 'none';
		} else {
			passwordInput.type = 'password';
			eyeIcon.style.display = 'none';
			eyeSlashIcon.style.display = 'block';
		}
	});
</script>