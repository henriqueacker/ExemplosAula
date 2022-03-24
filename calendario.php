
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<div class="container">
    <div class="section">
<div class="row center">	
    <table class="striped">
		<thead>
			<tr>
				<th>DATA</th>
				<th>HORA</th>
			</tr>
		</thead>
		<tbody>
	<?php
$sql = "SELECT * FROM partidas";
$resultado = mysqli_query($connect, $sql);
if (mysqli_num_rows($resultado) > 0) :

    while ($dados = mysqli_fetch_array($resultado)) :
        ?>
		<tr>
				<td><?php echo date('d-m-Y', strtotime($dados["data"])); ?></td>
				<td><?php echo $dados['hora']; ?></td>
		</tr>
				</div>
			</div>
	<?php
    endwhile
    ;
else :
    ?>

				<tr>
				<td>-</td>
				<td>-</td>
			</tr>

			   <?php
endif;
?>

	</tbody>
	</table>
    <p>
Lorem ipsum mattis nisl tincidunt ut sagittis ac curabitur, ornare vivamus aptent augue sociosqu congue eu nulla, donec sodales sit nibh nam ad sagittis. 
amet nibh vel diam elit netus dapibus nulla sagittis, potenti fames ante mi mattis cubilia etiam, condimentum eleifend molestie consequat purus netus molestie. 
nam vel dui litora nullam nunc quam egestas a tincidunt, nisi laoreet eleifend est tristique posuere vehicula morbi aliquam, tincidunt lacinia lacus rhoncus nulla cubilia praesent lacinia. 
semper posuere tellus ut bibendum tristique convallis netus nec phasellus luctus aptent rhoncus aenean netus arcu bibendum vehicula, massa tellus maecenas nec sapien etiam commodo dictumst hendrerit habitant adipiscing purus odio condimentum gravida etiam. 
</p>
<p>
Porttitor risus nisi suscipit curae inceptos dui, posuere leo ut nunc fusce nibh, nullam pulvinar convallis gravida aliquam. 
auctor vivamus curabitur consequat curabitur aliquam arcu sem fringilla nam luctus augue, etiam at justo aptent nec hac curae pulvinar leo nostra, justo etiam ut senectus non class mollis consectetur lorem conubia. 
vulputate placerat tincidunt integer quam curae erat vulputate viverra, imperdiet habitasse facilisis pulvinar mollis vel class duis, himenaeos quisque malesuada torquent vestibulum lorem dictum. 
quisque aliquam nisi tellus conubia primis nullam cubilia tristique euismod ultricies, sem ullamcorper inceptos eleifend dapibus adipiscing sodales molestie nunc lacinia curabitur, cursus donec habitasse dictum elementum eros hendrerit in nibh. 
</p>
<p>
Condimentum sociosqu non fringilla eu per mattis quisque tempus sodales rhoncus, sollicitudin nunc luctus donec imperdiet torquent sem risus taciti lobortis ligula, tempus ac tincidunt nec sem vel semper adipiscing commodo. 
aliquam integer venenatis aliquam sapien arcu urna aenean maecenas, torquent dapibus nisl semper conubia curae sem, mi amet vehicula nisl leo ad massa. 
odio donec at integer donec pulvinar vivamus sollicitudin ad vitae primis quisque, himenaeos luctus bibendum eget tellus integer netus tempus nibh volutpat donec, proin viverra sem mattis volutpat accumsan porta ultrices eros primis. 
</p>
<p>
Condimentum sociosqu non fringilla eu per mattis quisque tempus sodales rhoncus, sollicitudin nunc luctus donec imperdiet torquent sem risus taciti lobortis ligula, tempus ac tincidunt nec sem vel semper adipiscing commodo. 
aliquam integer venenatis aliquam sapien arcu urna aenean maecenas, torquent dapibus nisl semper conubia curae sem, mi amet vehicula nisl leo ad massa. 
odio donec at integer donec pulvinar vivamus sollicitudin ad vitae primis quisque, himenaeos luctus bibendum eget tellus integer netus tempus nibh volutpat donec, proin viverra sem mattis volutpat accumsan porta ultrices eros primis. 
</p>
<p>
Condimentum sociosqu non fringilla eu per mattis quisque tempus sodales rhoncus, sollicitudin nunc luctus donec imperdiet torquent sem risus taciti lobortis ligula, tempus ac tincidunt nec sem vel semper adipiscing commodo. 
aliquam integer venenatis aliquam sapien arcu urna aenean maecenas, torquent dapibus nisl semper conubia curae sem, mi amet vehicula nisl leo ad massa. 
odio donec at integer donec pulvinar vivamus sollicitudin ad vitae primis quisque, himenaeos luctus bibendum eget tellus integer netus tempus nibh volutpat donec, proin viverra sem mattis volutpat accumsan porta ultrices eros primis. 
</p>
    </div>
    </div>
    </div>
    
 <?php include_once 'layout/footer.php' ?>
