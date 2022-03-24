
<?php include_once 'layout/message.php' ?>
<?php include_once 'layout/header.php'?>
<?php include_once 'layout/menu.php'?>
<?php require_once 'php/conexaodb.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
	    $('select').formSelect();
	  });
  </script>


  <div class="container">
    <div class="section">
	<p>
Lorem ipsum imperdiet dictumst class risus dictumst semper eleifend aenean, tortor porttitor duis ut porta sollicitudin vestibulum congue dolor, taciti elit nunc mi elit habitant vestibulum vehicula. 
adipiscing amet purus eleifend semper dictumst risus sagittis rhoncus eros, malesuada massa class ligula fusce blandit vitae lorem viverra, dui quis volutpat libero fusce sodales diam proin. 
non ultricies curae porta proin himenaeos nostra pretium malesuada, litora pretium commodo litora torquent etiam vehicula ut, quisque platea varius nunc ut massa gravida. 
feugiat nullam ultricies nisi auctor ut litora ullamcorper lacus fringilla, augue tortor pulvinar tempor ultrices fames rhoncus accumsan, eget fusce quisque eu metus aptent condimentum sociosqu. 
</p>
<p>
Sit tempus per class consequat tincidunt adipiscing fames tristique dapibus, semper leo tincidunt urna luctus iaculis sodales fringilla, donec est amet dui ornare mattis potenti porta. 
pretium neque nibh taciti suspendisse mattis euismod nam ipsum interdum aenean proin aliquam molestie diam lorem, mollis aenean lacus elementum nibh accumsan maecenas varius fermentum sodales primis libero ad massa. 
curae cursus sed fringilla etiam dictumst ante maecenas, elementum scelerisque convallis tristique elit lorem, eros curabitur placerat augue elementum nulla. 
adipiscing dolor nullam sollicitudin nullam adipiscing accumsan a accumsan consectetur vivamus purus faucibus commodo, lobortis lacus ante mauris porttitor quisque gravida arcu per felis nisi venenatis. 
</p>
<p>
Suspendisse vel egestas taciti curabitur lobortis consequat id consectetur nulla imperdiet tellus nunc, consequat fames ligula tristique massa faucibus lacinia interdum turpis etiam. 
dapibus augue proin varius purus suspendisse potenti quisque congue, primis mauris quam mattis interdum nostra habitant nunc praesent, scelerisque ante ut vestibulum curabitur fames ut. 
felis luctus pulvinar erat cras suspendisse pulvinar, erat pellentesque lacus enim nunc augue rutrum, lorem sapien arcu sollicitudin arcu. 
auctor nisi nostra egestas neque magna pulvinar erat conubia id nullam amet, lorem dolor auctor aptent libero vehicula phasellus vitae donec consequat, sapien lobortis phasellus nam id odio lacus sollicitudin etiam ultricies. 
</p>
<p>
Dui fringilla vivamus curabitur sollicitudin diam tempus imperdiet mi, placerat sem nisi est eros pellentesque pharetra, sociosqu commodo nostra dapibus diam pellentesque platea. 
ut vulputate est ornare elit pellentesque fermentum pulvinar et hendrerit adipiscing, iaculis ut elit lacinia malesuada non quis consectetur libero. 
aliquet viverra fusce ut dui placerat in nullam porttitor nisl urna gravida, maecenas torquent vivamus mattis metus malesuada nibh orci nam nisl ut, curabitur nunc proin vestibulum suscipit gravida pulvinar aliquam convallis sollicitudin. 
duis neque aenean curae vehicula et lectus nostra suspendisse, ad enim sociosqu conubia augue et nullam, imperdiet justo netus scelerisque rhoncus sapien nostra. 
</p>
<p>
Habitant vel duis curabitur viverra proin a potenti urna luctus, cubilia eleifend fusce aenean curabitur leo curae rhoncus, sit eget at morbi lacinia posuere rutrum erat. 
ultricies sollicitudin aenean tellus curabitur nullam curabitur volutpat condimentum conubia elementum pretium, felis at morbi tincidunt porta magna diam himenaeos sociosqu lectus, quisque vestibulum habitant felis ligula est malesuada magna ligula et. 
eget curabitur cubilia hac aliquam fames inceptos leo feugiat lobortis integer, convallis ut interdum quam aliquet fringilla nostra imperdiet suscipit, primis morbi ut lorem taciti cubilia fusce feugiat integer. 
aenean sodales molestie pharetra elementum ligula, lorem curabitur donec. 
</p>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4" id="cadastro">
          <div class="icon-block">
		  <h4 class="header left purple-text">Cadastro de Jogadores</h4>
            <form class="col s12" action="php/insert.php" method="post">
			<div class="input-field inline">
				<input id="nick" name='nick' type="text" class="validate"> <label
					for='nick'>Nick</label>
			</div>
			<select class="icons" name='lane'>
				<option value="" disabled selected>Escolha sua Lane primaria</option>
				<option value="TOP" data-icon="images/Top_icon.png">TOP</option>
				<option value="JG" data-icon="images/Jungle_icon.png">JG</option>
				<option value="MID" data-icon="images/Middle_icon.png">MID</option>
				<option value="SUP" data-icon="images/Support_icon.png">SUP</option>
				<option value="ADC" data-icon="images/Bottom_icon.png">ADC</option>
			</select> <select class="icons" name='lane2'>
				<option value="" disabled selected>Escolha sua Lane segundaria</option>
				<option value="TOP" data-icon="images/Top_icon.png">TOP</option>
				<option value="JG" data-icon="images/Jungle_icon.png">JG</option>
				<option value="MID" data-icon="images/Middle_icon.png">MID</option>
				<option value="SUP" data-icon="images/Support_icon.png">SUP</option>
				<option value="ADC" data-icon="images/Bottom_icon.png">ADC</option>
			</select>
			<button class="btn black waves-effect waves-light" type="submit"
				name="cadastrojogador">
				Cadastrar <i class="material-icons right">send</i>
			</button>
		</form>
          </div>
		</div>
	
		
          </div>
		</div>
      </div>
	</div>


 

 <?php include_once 'layout/footer.php' ?>
