<footer id="ft">copyright &copy 2016, JobApp.com</footer>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		(function(){
				$('#me').hover(function(){
					$.get('login.php').slideDown(1000);
				});
		});
	</script>
</body>
</html>