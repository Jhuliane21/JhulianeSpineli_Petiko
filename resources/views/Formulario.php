<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


        <title>Jhuliane</title>
        <style>
		body{
				background-color: green;
			}
			.contact{
				padding: 4%;
				height: 400px;
			}
			.col-md-3{
				background: #FF6347;
				padding: 4%;
				border-top-left-radius: 0.5rem;
				border-bottom-left-radius: 0.5rem;
			}
			.contact-info{
				margin-top:10%;
			}
			.contact-info img{
				
			}
			.contact-info h2{
				margin-bottom: 10%;
			}
			.col-md-9{
				background: #fff;
				padding: 3%;
				border-top-right-radius: 0.5rem;
				border-bottom-right-radius: 0.5rem;
			}
			.contact-form label{
				font-weight:600;
			}
			.contact-form button{
				background: #25274d;
				color: #fff;
				font-weight: 600;
				width: 25%;
			}
			.contact-form button:focus{
				box-shadow:none;
			}        </style>

				<style>
					body {
						font-family: 'Nunito', sans-serif;
					}
        </style>
    </head>
    <body class="antialiased">
		<form class="container contact">
			<div class="row">
				<div class="col-md-3">
					<div class="contact-info">
						<a href="https://imgbb.com/"><img src="https://i.ibb.co/F6KNHtH/888856.png" alt="888856"></a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="contact-form">
						<div class="form-group">
						<label class="control-label col-sm-2" for="nome">Nome:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-sm-2" for="cep">Cep:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="cep" placeholder="Cep" name="cep">
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="rua">Rua:</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="rua" placeholder="Rua" name="rua">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="numero">Numero:</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="numero" placeholder="Numero" name="numero">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="bairro">Bairro:</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="cep" placeholder="Bairro" name="bairro">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="cidade">Cidade:</label>
							<div class="col-sm-10">
							<input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade">
							</div>
						</div>
						<br>
						<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</form>
    </body>
	
</html>
