<?php include "linker.php";?>
<?php
$msg = "";
if(isset($_POST["action"]))
{
	if($_POST["action"]=="fetch")
	{
		$query="select * from daily_meal order by id";
		$result=mysqli_query($connect,$query);
		$output=
		'
			<table class="table table-striped  table-bordered" style="margin:0;margin-top:1%;margin-right:%">
				<thead style="">
				  <tr>
					<th>#</th>
					<th>Name</th>
					<th>01</th>
					<th>02</th>
					<th>03</th>
					<th>04</th>
					<th>05</th>
					<th>06</th>
					<th>07</th>
					<th>08</th>
					<th>09</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
					<th>21</th>
					<th>22</th>
					<th>23</th>
					<th>24</th>
					<th>25</th>
					<th>26</th>
					<th>27</th>
					<th>28</th>
					<th>29</th>
					<th>30</th>
					<th>31</th>
					<th>Total</th>
				  </tr>
				</thead>
		';
		$sql2 = "select * from daily_meal";
		$qty=array_fill(0, 31, 0);
		$meal_per_member=array_fill(0, 31, 0);
		$j=0;
		$deposite_per_member=array_fill(0, 31, 0);
		$total_meal=0;
		$total_member=0;
		$day_name=array("Day01","Day02","Day03","Day04","Day05","Day06","Day07","Day08","Day09","Day10",
						"Day11","Day12","Day13","Day14","Day15","Day16","Day17","Day18","Day19","Day20",
						"Day21","Day22","Day23","Day24","Day25","Day26","Day27","Day28","Day29","Day30","Day31");
		while($data=mysqli_fetch_array($result))
		{
			$total_member++;
			for($i=0;$i<30;$i++)
			{
				$qty[$i]+=$data[$day_name[$i]];
			}
			for($i=0;$i<30;$i++)
			{
				$meal_per_member[$j]+=$data[$day_name[$i]];
			}
			$id=$data['id'];
			$name=$data['Name'];
			$total_meal+=$meal_per_member[$j];
			$output .='
			
				<tr>
							<td>'.$id.'</td>
							<td style="font-size:px">'.$name.'</td>
							<td>'.$data['Day01'].'</td>
							<td>'.$data['Day02'].'</td>
							<td>'.$data['Day03'].'</td>
							<td>'.$data['Day04'].'</td>
							<td>'.$data['Day05'].'</td>
							<td>'.$data['Day06'].'</td>
							<td>'.$data['Day07'].'</td>
							<td>'.$data['Day08'].'</td>
							<td>'.$data['Day09'].'</td>
							<td>'.$data['Day10'].'</td>
							<td>'.$data['Day11'].'</td>
							<td>'.$data['Day12'].'</td>
							<td>'.$data['Day13'].'</td>
							<td>'.$data['Day14'].'</td>
							<td>'.$data['Day15'].'</td>
							<td>'.$data['Day16'].'</td>
							<td>'.$data['Day17'].'</td>
							<td>'.$data['Day18'].'</td>
							<td>'.$data['Day19'].'</td>
							<td>'.$data['Day20'].'</td>
							<td>'.$data['Day21'].'</td>
							<td>'.$data['Day22'].'</td>
							<td>'.$data['Day23'].'</td>
							<td>'.$data['Day24'].'</td>
							<td>'.$data['Day25'].'</td>
							<td>'.$data['Day26'].'</td>
							<td>'.$data['Day27'].'</td>
							<td>'.$data['Day28'].'</td>
							<td>'.$data['Day29'].'</td>
							<td>'.$data['Day30'].'</td>
							<td>'.$data['Day31'].'</td>
							<td>'.$meal_per_member[$j].'</td>
			';
			$j++;
		}
						$output .='
						<tr style="font-weight:bold">
							<td></td>
							<td>Total</td>
							<td>'.$qty[0].'</td>
							<td>'.$qty[1].'</td>
							<td>'.$qty[2].'</td>
							<td>'.$qty[3].'</td>
							<td>'.$qty[4].'</td>
							<td>'.$qty[5].'</td>
							<td>'.$qty[6].'</td>
							<td>'.$qty[7].'</td>
							<td>'.$qty[8].'</td>
							<td>'.$qty[9].'</td>
							<td>'.$qty[10].'</td>
							<td>'.$qty[11].'</td>
							<td>'.$qty[12].'</td>
							<td>'.$qty[13].'</td>
							<td>'.$qty[14].'</td>
							<td>'.$qty[15].'</td>
							<td>'.$qty[16].'</td>
							<td>'.$qty[17].'</td>
							<td>'.$qty[18].'</td>
							<td>'.$qty[19].'</td>
							<td>'.$qty[20].'</td>
							<td>'.$qty[21].'</td>
							<td>'.$qty[22].'</td>
							<td>'.$qty[23].'</td>
							<td>'.$qty[24].'</td>
							<td>'.$qty[25].'</td>
							<td>'.$qty[26].'</td>
							<td>'.$qty[27].'</td>
							<td>'.$qty[28].'</td>
							<td>'.$qty[29].'</td>
							<td>'.$qty[30].'</td>
							<td>'.$total_meal.'</td>
						</tr>';
		$output .='</table>';
		echo $output;
	}
	if($_POST["action"] == "update")
	{
	  $name=$_POST["name"];
	  $id=$_POST["id"]; 
	  $meal_no=$_POST["meal_no"]; 
	  $day=$_POST["day"];
	  if($id=='all' && $name=='all')
	  {
		$query = "update daily_meal set $day ='$meal_no'";
	  }
	  else if($name!='all')
	  {
		$query = "update daily_meal set $day ='$meal_no' where Name='$name'";
	  }
	  else if($id!='all')
	  {
		$query = "update daily_meal set $day ='$meal_no' where id=$id";
	  }
	  mysqli_query($connect, $query);
	}
	if($_POST["action"] == "reset")
	{
	  $name=$_POST["name"];
	  $query = "update daily_meal set Day01=0, Day02=0, Day03=0, Day04=0, Day05=0, Day06=0, Day07=0, Day08=0,Day09=0,Day10=0,
										  Day11=0,Day12=0,Day13=0,Day14=0,Day15=0,Day16=0,Day17=0,Day18=0,Day19=0,Day20=0,
										  Day21=0,Day22=0,Day23=0,Day24=0,Day25=0,Day26=0,Day27=0,Day28=0,Day29=0,Day30=0,Day31=0
										  where Name='$name'";
	  mysqli_query($connect, $query);
	}
}
?>