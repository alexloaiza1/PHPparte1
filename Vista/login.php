<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form id="loginForm" action="validacion.php" method="POST" role="form">
							<legend>Iniciar sesión</legend>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" id="email" autofocus required placeholder="email">
							</div>

							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" required id="password" placeholder="****">
							</div>

							<button type="submit" class="btn btn-success">Ingresar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include 'partials/footer.php'; ?>
