
<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<title>Heroes Search</title>

</head>

<body style="background-color:#F5EFE7;">

	<div class="container" style="max-width: 50%;">	
		
		<div class="text-center mt-5 mb-4">
			<h2>CVSU IMUS HEROES: PLAYERS</h2>
		</div>

		<div class="form-outline">
		<input type="search" id="live_search" class="form-control" placeholder = "Search....">
		<!---<label class="form-label" for="live_search"></label>-->
		</div>

	</div> 

	<div id="searchresult"></div>
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$("#live_search").keyup(function(){			
				var input = $(this).val();

				if(input != ""){
					$.ajax({

						url: "livesearch.php",
						method:"POST",
						data:{input:input},

						success:function(data){
							$("#searchresult").html(data);
							$("#searchresult").css("display","block");
						}
					});
				}
				else {
					$("#searchresult").css("display","none");
				}
			});
		});
	</script>	
</body>
</html>