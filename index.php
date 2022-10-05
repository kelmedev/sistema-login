<?php include 'header.php'; ?>

<link rel="stylesheet" href="style.css">

<div class="login-box text-light bg-dark m-auto p-5 position-absolute top-50 start-50 translate-middle w-25 p-10">
	<form action="index.php" method="post" class="needs-validation" novalidate>
		<div class="form-group mb-3">
			<label for="username">Nome</label>
			<input type="text" class="form-control" id="username" placeholder="Usuário ou email" name="username" required>
		</div>
		<div class="form-group mb-3">
			<label for="password">Senha</label>
			<input type="password" class="form-control" id="password" placeholder="Senha" name="password" required>
		</div>
		<button type="submit" class="btn btn-primary mx-auto d-block w-100 text-light" name="submit">Entrar</button>
	</form>

   <a href="./cadastro.php"><button class="btn btn-primary mx-auto d-block w-100 text-light mt-3">Não tem conta?</button></a> 
</div>



<?php include 'footer.php'; ?>
