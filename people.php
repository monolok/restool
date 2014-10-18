<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<span class="subfont">Your People</span>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-primary">
  				<div class="panel-heading">
    				<h3 class="panel-title">Recruiting</h3>
  				</div>
  				<div class="panel-body">

 					<h2>Interviewee ?</h2>
					<form name="checkListForm">
						<input type="text" name="checkListItem"/>
					</form>
					<div id="button">Go!</div>
					<br/>
					<div class="list"></div>

  					<script type="text/javascript">

$(document).ready(function () {
    $('#button').click(function() {
           var name1 = $('input[name=checkListItem]').val();
           $('.list').append('<div class="item">' + name1 + '</div>');

        });
    
    $(document).on('click', '.item', function () {
        $(this).remove();
        }); 

    $(document).bind('keypress', function(e){
   		if(e.which === 13) {
   			e.preventDefault();
   			$('#button').trigger('click');
   			}
		});


    });

  					</script>

  				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
  				<div class="panel-heading">
    				<h3 class="panel-title">Keep or fire ?</h3>
  				</div>
  				<div class="panel-body">
    				App
  				</div>
			</div>			
		</div>
	</div>
</div>

<?php include('footer.php'); ?>

</body>
</html>