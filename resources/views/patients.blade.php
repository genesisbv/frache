<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="{{asset('css/body.css')}}">
        <title>Pacientes</title>

        
    </head>
    <body>
       <h2>PACIENTES</h2>

       <div class="panel panel-default">
		  <div class="panel-heading">Pacientes</div>
		  <div class="panel-body">
		  	<div class="row">
			    <form class="form-inline col-md-10">
				  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cédula">
				  <button type="submit" class="btn btn-default">Buscar</button>
				</form>
				<button type="button" class="btn btn-primary">Registrar paciente</button>
			</div>
			

			<table class="table table-striped">
			<thead>
			<th>Nombre</th>
			    <th>Apellido</th>
			    <th>Sexo</th>
			    <th>Edad</th>
			    <th>Teléfono</th>
			    <th>Email</th>
			</thead>
			<tbody>
			  	@foreach ($patients as $patient)
		    	<tr>
		    		<td>{{ $patient->name }}</td>
		       		<td>{{ $patient->lastname }}</td>
		       		<td>{{ $patient->sex }}</td>
		       		<td>{{ $patient->birthdate }}</td>
		       		<td>{{ $patient->phone }}</td>
		       		<td>{{ $patient->email }}</td>
		       	</tr>
		       	@endforeach
			</tbody>
			</table>    	

		  </div>
		</div>



    </body>
</html>
