		</div> <!-- middle -->
	
	</div> <!-- middle_bg -->
	
	<div id="bottom_bg">
	
		<div id="bottom">
		
			<div id="copyStatement">
			
				<?php $beg_year = 2012; $cur_year = date('Y');
				
				if ($beg_year == $cur_year) {
					echo $cur_year;
				} else {
					echo $beg_year . ' - ' . $cur_year;
				} ?>
				
				<?php //echo '<a id="mushmush" href="bind.php?show=phpInfo">'; ?>
				&copy;
				<?php //echo '</a>'; ?>
				Matthew Isner&nbsp;&nbsp;|&nbsp;&nbsp;Icon artwork &copy; Blizzard Entertainment
			
			</div>
		
		</div>
	
	</div>
	
	<script src="_scripts/default.js"></script>

</body>
<?php if (strstr($_SERVER['SERVER_NAME'], 'localhost')
		//|| (isset($_GET['show']) && $_GET['show'] == 'phpInfo')
	) { ?>
	<pre><?php print_r($GLOBALS); ?></pre>
<?php } ?>
</html>
<?php
// ----------------
// Close connection
// ----------------
if (isset($connection)) {
	mysql_close($connection);
}
?>