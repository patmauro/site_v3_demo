<?php
	/*	Normally WordPress includes an index php file that fetches the theme info and
		the blog info and then simply recreates the front page by including its own
		php file.

		Since in this demo version of my site the blog is not included, as it is not an
		example of original work, this index page instead follows the same logic by
		fetching the stand-in blog php file I created and begins building it.	*/

		require("blog.php");
?>