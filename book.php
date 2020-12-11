<?php
include 'dbhelper.php';
include 'nav_active.php';

$movieid=$_GET["id"];
error_reporting(0);
$select1=$con->query("select * from movie where id='".$movieid."'");
$r1=mysqli_fetch_array($select1);
$name=$r1["name"];
$price=$r1["price"];
$description=$r1["description"];
$start=$r1["start"];
$end=$r1["end"];
$genre=$r1["genre"];
$image=$r1["image"];
$availability=$r1["availability"];
$seats=$r1["seats"];
?>
<script type="text/javascript">
	var seats = <?php echo("'".$seats."'"); ?>;
	var cost=0;
	var number=0;
	var price=<?php echo($price); ?>;
	var movieid=<?php echo($movieid); ?>;
	var link="";
	var name=<?php echo("'".$name)."'"; ?>;
	
</script>
<style> 
body {
	background-image: url("theatre.jpg");
  height: 95%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo $image ?>"" height='200spx' width='150px'>
		</div>
		<div class="col-md-4">
			<h2><?php echo $name ?></h2>
			<p>Description : <?php echo $description ?></p>
			<p>Genre : <?php echo $genre ?></p>
			<p>Show time : <?php echo $start.' to '.$end ?></p>
		</div>

		<div class="col-md-4">
			<p id='num'> Number of tickets = 0</p>
			<p id='bill'> Cost = 0</p>
			<button class="btn btn-success" id="proceed" onclick="window.location.href=link">Proceed</button>
		</div>
	</div>
	<div class="row" style="margin-left: 200px;margin-top:50px;margin-right:20px">
		<div>
			<script type="text/javascript">
				var id=0;

				var arr=new Array(100).fill(0);
				var choice=new Array(100).fill(0);
				console.log(seats);

				for(var i=0;i<5;i++)
				{
					for(var j=0;j<20;j++)
					{
						var seat=seats.charAt(id);
						console.log(seat);
						arr[id]=seat;
						choice[id]=seat;
						if(seat==1)
						{
							document.write('<img src="images/booked.png" onclick="changeColor()" style="margin:5px" height=25 width=25 id="'+id+'">');
							choice[id]=2;
						}
						else
						{
						document.write('<img src="images/unselect.png" onclick="changeColor(this.id)" style="margin:5px" height=25 width=25 id="'+id+'">');	
						choice[id]=0;						
						}
						id=id+1;

					}
					document.write('<br>');
					

				}
				

			</script>
			<script type="text/javascript">
				function changeColor(s)
				{
					var num=document.getElementById("num");
					var bill=document.getElementById("bill");
				
					if(choice[s]==0)
					{
						
						var box=document.getElementById(s);
						choice[s]=1;
						box.src="images/select.png";
						number+=1;
					}
					else if(choice[s]==1)
					{
						
						var box=document.getElementById(s);
						choice[s]=0;
						box.src="images/unselect.png";
						number-=1;
					}
					num.innerHTML="Number of tickets = "+number;
					
					bill.innerHTML="Cost = ₹"+(parseInt(price)*parseInt(number));	
						
					js=JSON.stringify(choice);
					
					link="book_confirm.php?id="+movieid+"&choice="+choice+"&name="+name;	
						
				}
			</script>
		</div>
	</div>
</div><br><br>
<?php
include 'footer.php';
?>

<script>
	$("#proceed").click(function(){
		alert("Your Ticket is Booked Successfully!")
});
</script>