
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script>
			function editar(id, txt_tarefa){
				//criar um form de edição
				let form = document.createElement('form');
				form.action = 'tarefa_controller.php?acao=atualizar';
				form.method = 'post';
				form.className = 'row';
				//criar um input para entrada do texto
				let inputTarefa = document.createElement('input');
				inputTarefa.type = 'text';
				inputTarefa.name = 'tarefa';
				inputTarefa.className = 'col-9 form-control';
				inputTarefa.value = txt_tarefa;

				//criar um input hidden para guardar o id da tarefa;
				let inputId = document.createElement('input');
				inputId.type = 'hidden';
				inputId.name = 'id';
				inputId.value = id;
				//criar um button para envio do form
				let button = document.createElement('button');
				button.type = 'submit';
				button.className = 'col-3 btn btn-info';
				button.innerHTML = 'Atualizar';

				//incluir o input tarefa no form
				form.appendChild(inputTarefa);

				//incluir o inpuId no form
				form.appendChild(inputId);

				//incluir o button
				form.appendChild(button);

				//selecionar a div tarefa
				let tarefa = document.getElementById('tarefa_' + id);
	
				//limpar o texto da tarefa para inlusão do form
				tarefa.innerHTML = '';

				//inclusão do form na página
				tarefa.insertBefore(form, tarefa[0]);
			}

			function remover(id){
				location.href = 'todas_tarefas.php?acao=remover&id='+id;
			}

			function marcarRealizada(id){ 
				location.href = 'todas_tarefas.php?acao=marcarRealizada&id='+id;
			}
		</script>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="home.php">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="nova_despesa.php">Nova despesa</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="consultar_despesas.php">Consultar despesas</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="todas_despesas.php">Todas Despesas</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="nova_receita.php">Nova Receita</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="consultar_receita.php">Consultar receitas</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="todas_receitas.php">Todas receitas</a>
				</li>
			</ul>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="consultar_despesas.php">depsesas pendentes</a></li>
						<li class="list-group-item"><a href="nova_despesa.php">Nova depsesa</a></li>
						<li class="list-group-item active"><a href="#">Todas despesas</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas despesas</h4>
								<hr />
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9" id="">
											Pagar faculdade (pendente)
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover()"></i>
											<i class="fas fa-edit fa-lg text-info" onclick="editar()"></i>
											<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada()"></i>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>