    <div id="footer">Copyright <?php echo date("Y"); ?>, Serj86</div>

	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>
