
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>
	<?php
		include("Navbar.php");
	?>
	<!-- Body1  -->
	<div class="container" style="height: 105vh">
		<div class="row pt-5">
			<div class="col-md-6 mt-5">
				<h3>Notes</h3>
				<p>Handed picked notes from teachers and students from respected collages and Universities</p>
				
			</div>
			<div class="col-md-6">
				<table class="mt-3 table-responsive">
					<tr>
						<th width="100" >
							<div class="card p-3 m-1" style="height: 100px !important">
							<center> <a href="notesdb/ai.php">Artifical Intelligance</a></center>
							</div>
						</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="notesdb/nlp.php">Neural language</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="notesdb/c.php">C</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="notesdb/cpp.php">C++</a></center>
						</div>
					</th>
				</tr>
				<tr>
					<th width="100" >
						<div class="card p-3 m-1" style="height: 100px !important">
						<center> <a href="notesdb/java.php">Java</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3" style="height: 100px !important">
						<center><a href="notesdb/networking.php">Networking</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="notesdb/dbms.php">DBMS</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="notesdb/ds.php">Data Structure</a></center>
						</div>
					</th>
				</tr>	
				<tr>
					<th width="100" >
						<div class="card p-3 m-1" style="height: 100px !important">
						<center> <a href="">OOMD</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3" style="height: 100px !important">
						<center><a href="">Mathematics</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="">Theory of Computation</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p- m-1" style="height: 100px !important">
						<center><a href="">Computer Organization</a></center>
						</div>
					</th>
				</tr>	
				<tr>
					<th width="100" >
						<div class="card p-3 m-1" style="height: 100px !important">
						<center> <a href="">System Programming</a></center>
					</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3" style="height: 100px !important">
						<center><a href="">Compailer Construnction</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="">Operating System</a></center>
						</div>
					</th>
					<th width="100" height="100">
						<div class="card p-3 m-1" style="height: 100px !important">
						<center><a href="">Engineering Economics</a></center>
						</div>
					</th>
				</tr>
			</table>
		</div>
	</div>
</div>
	







	<!-- End of Body -->
	<?php
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>