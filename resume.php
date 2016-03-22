<?php
	//Page title
	$title = "R&eacute;sum&eacute;";
	//Custom stylesheet additions
	$style = '<style>
	h3 {
		font-style:italic;
		font-variant:small-caps;
		margin:0px;
		padding:0px;
	}
	h2 {
		font-weight: bold;
		font-variant:small-caps;
		margin:0px;
		padding:0px;
	}
	table {
    	width: 100%;
    }
	td {
    	padding-right: 2em;
    	padding-top:0px;
    	padding-bottom:0px;
    	margin:0px;
    	width: 50%;
    	vertical-align:top;
	}
	</style>';
	// Custom font additons
	$font = "";
	// Begin generating page
	include("header.php");
?>


<h1>R&eacute;sum&eacute;</h1>
<p>Below is a web-formatted, long-form version of my current r&eacute;sum&eacute;. If you would like a copy formatted as a .PDF or .DOCX document, please contact me by email.</p>

<hr>
<br>
<h2>Skills</h2>
<ul>
<li>Description of a particular skillset</li>
<li>Description of a particular skillset</li>
<li>Description of a particular skillset</li>
<li>Description of a particular skillset</li>
<li>Description of a particular skillset</li>
<li>Description of a particular skillset</li>
</ul>

<h2>Education</h2>
<table>
	<tr>
		<td> <!--School-->
		<ul style="margin-bottom:0;"><li>
			<b>John Doe University, New York, NY - Master's Degree</b>
			<br><i>Degree Concentration</i>
		</li></ul>
		</td>
		<td> <!--Time Period-->
			<b>Class of XXXX</b>
		</td>
	</tr>
	<tr>
		<td> <!--School-->
		<ul style="margin-bottom:0;"><li>
			<b>John Doe University, New York, NY - Bachelor's Degree</b>
			<br><i>Major, Minor</i>
		</li></ul>
		</td>
		<td> <!--Time Period-->
			<b>Class of XXXX</b>
		</td>
	</tr>
</table>

<br>

<ul style="margin-bottom:0; list-style-type:none;">
<li>

<h3>Relevant Coursework:</h3>

<table>
	<tr>
		<td>
			<ul style="margin-bottom:0;">
				<li>Course Name 101</li>
				<li>Course Name 145</li>
				<li>Course Name 201</li>
				<li>Course Name 245</li>
			</ul>
		</td>
		<td>
			<ul style="margin-bottom:0;">
				<li>Course Name 301</li>
				<li>Course Name 345</li>
				<li>Course Name 401</li>
				<li>Course Name 445</li>

			</ul>
		</td>
	</tr>
</table>

</li></ul>

<br>

 
<h2>Experience</h2>

<table>
	<tr>
		<td> <!--Company-->
		<ul style="margin-bottom:0;"><li>
			<b>JobCorp, New York City, NY</b>
			<br>Job Title
		</li></ul>
		</td>
		<td> <!--Time Period-->
			<b>January XXXX - December XXXX</b>
		</td>
	</tr>
</table>
<ul style="margin-bottom:0; list-style-type:none; font-style:italic;">
<li><table>
	<tr> <!-- Duties -->
		<td><ul style="margin-bottom:0;">
			<li>Duties description 1</li>
			<li>Duties description 2</li>
		</ul></td>
		<td><ul style="margin-bottom:0;">
			<li>Duties description 3</li>
			<li>Duties description 4</li>
		</ul></td>
	</tr>
</table></li></ul>
<br>

<table>
	<tr>
		<td> <!--Company-->
		<ul style="margin-bottom:0;"><li>
			<b>JobCorp, New York City, NY</b>
			<br>Job Title
		</li></ul>
		</td>
		<td> <!--Time Period-->
			<b>January XXXX - December XXXX</b>
		</td>
	</tr>
</table>
<ul style="margin-bottom:0; list-style-type:none; font-style:italic;">
<li><table>
	<tr> <!-- Duties -->
		<td><ul style="margin-bottom:0;">
			<li>Duties description 1</li>
			<li>Duties description 2</li>
		</ul></td>
		<td><ul style="margin-bottom:0;">
			<li>Duties description 3</li>
			<li>Duties description 4</li>
		</ul></td>
	</tr>
</table></li></ul>
<br>


<p style="text-align:center; font-style:italic;"><i>References available upon request.</i></p>


<?php include("footer.php"); ?>