<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Actualités MGLSI</title>
        <link rel="stylesheet" href="/mglsi_news_simple/assets/css/style2.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
        .table-responsive {
            margin: 30px 0;
        }
        .table-wrapper {
        	background: #fff;
        	padding: 20px 25px;
        	border-radius: 3px;
        	min-width: 1000px;
        	box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-title {
        	padding-bottom: 15px;
        	background: #435d7d;
        	color: #fff;
        	padding: 16px 30px;
        	min-width: 100%;
        	margin: -20px -25px 10px;
        	border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
        	margin: 5px 0 0;
        	font-size: 24px;
        }
        .table-title .btn-group {
        	float: right;
        }
        .table-title .btn {
        	color: #fff;
        	float: right;
        	font-size: 13px;
        	border: none;
        	min-width: 50px;
        	border-radius: 2px;
        	border: none;
        	outline: none !important;
        	margin-left: 10px;
        }
        .table-title .btn i {
        	float: left;
        	font-size: 21px;
        	margin-right: 5px;
        }
        .table-title .btn span {
        	float: left;
        	margin-top: 2px;
        }
        table.table tr th, table.table tr td {
        	border-color: #e9e9e9;
        	padding: 12px 15px;
        	vertical-align: middle;
        }
        table.table tr th:first-child {
        	width: 60px;
        }
        table.table tr th:last-child {
        	width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
        	background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
        	background: #f5f5f5;
        }
        table.table th i {
        	font-size: 13px;
        	margin: 0 5px;
        	cursor: pointer;
        }
        table.table td:last-child i {
        	opacity: 0.9;
        	font-size: 22px;
        	margin: 0 5px;
        }
        table.table td a {
        	font-weight: bold;
        	color: #566787;
        	display: inline-block;
        	text-decoration: none;
        	outline: none !important;
        }
        table.table td a:hover {
        	color: #2196F3;
        }
        table.table td a.edit {
        	color: #FFC107;
        }
        table.table td a.delete {
        	color: #F44336;
        }
        table.table td i {
        	font-size: 19px;
        }
        table.table .avatar {
        	border-radius: 50%;
        	vertical-align: middle;
        	margin-right: 10px;
        }
        .pagination {
        	float: right;
        	margin: 0 0 5px;
        }
        .pagination li a {
        	border: none;
        	font-size: 13px;
        	min-width: 30px;
        	min-height: 30px;
        	color: #999;
        	margin: 0 2px;
        	line-height: 30px;
        	border-radius: 2px !important;
        	text-align: center;
        	padding: 0 6px;
        }
        .pagination li a:hover {
        	color: #666;
        }
        .pagination li.active a, .pagination li.active a.page-link {
        	background: #03A9F4;
        }
        .pagination li.active a:hover {
        	background: #0397d6;
        }
        .pagination li.disabled i {
        	color: #ccc;
        }
        .pagination li i {
        	font-size: 16px;
        	padding-top: 6px
        }
        .hint-text {
        	float: left;
        	margin-top: 10px;
        	font-size: 13px;
        }
        /* Custom checkbox */
        .custom-checkbox {
        	position: relative;
        }
        .custom-checkbox input[type="checkbox"] {
        	opacity: 0;
        	position: absolute;
        	margin: 5px 0 0 3px;
        	z-index: 9;
        }
        .custom-checkbox label:before{
        	width: 18px;
        	height: 18px;
        }
        .custom-checkbox label:before {
        	content: '';
        	margin-right: 10px;
        	display: inline-block;
        	vertical-align: text-top;
        	background: white;
        	border: 1px solid #bbb;
        	border-radius: 2px;
        	box-sizing: border-box;
        	z-index: 2;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
        	content: '';
        	position: absolute;
        	left: 6px;
        	top: 3px;
        	width: 6px;
        	height: 11px;
        	border: solid #000;
        	border-width: 0 3px 3px 0;
        	transform: inherit;
        	z-index: 3;
        	transform: rotateZ(45deg);
        }
        .custom-checkbox input[type="checkbox"]:checked + label:before {
        	border-color: #03A9F4;
        	background: #03A9F4;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
        	border-color: #fff;
        }
        .custom-checkbox input[type="checkbox"]:disabled + label:before {
        	color: #b8b8b8;
        	cursor: auto;
        	box-shadow: none;
        	background: #ddd;
        }
        /* Modal styles */
        .modal .modal-dialog {
        	max-width: 400px;
        }
        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
        	padding: 20px 30px;
        }
        .modal .modal-content {
        	border-radius: 3px;
        	font-size: 14px;
        }
        .modal .modal-footer {
        	background: #ecf0f1;
        	border-radius: 0 0 3px 3px;
        }
        .modal .modal-title {
        	display: inline-block;
        }
        .modal .form-control {
        	border-radius: 2px;
        	box-shadow: none;
        	border-color: #dddddd;
        }
        .modal textarea.form-control {
        	resize: vertical;
        }
        .modal .btn {
        	border-radius: 2px;
        	min-width: 100px;
        }
        .modal form label {
        	font-weight: normal;
        }
        </style>

        <script>
        $(document).ready(function(){
        	// Activate tooltip
        	$('[data-toggle="tooltip"]').tooltip();

        	// Select/Deselect checkboxes
        	var checkbox = $('table tbody input[type="checkbox"]');
        	$("#selectAll").click(function(){
        		if(this.checked){
        			checkbox.each(function(){
        				this.checked = true;
        			});
        		} else{
        			checkbox.each(function(){
        				this.checked = false;
        			});
        		}
        	});
        	checkbox.click(function(){
        		if(!this.checked){
        			$("#selectAll").prop("checked", false);
        		}
        	});
        });
        </script>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
              <i class='bx bxl-c-plus-plus icon'></i>
                <div class="logo_name">Gestions</div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <ul class="nav-list">
              <li>
                <a href="/mglsi_news_simple/vue/gestionArticlesAdmin.php">
                  <i class='bx bx-grid-alt'></i>
                  <span class="links_name">Articles</span>
                </a>
                 <span class="tooltip">Articles</span>
              </li>
              <li>
               <a href="/mglsi_news_simple/vue/gestionCategoriesAdmin.php">
                 <i class='bx bx-grid-alt' ></i>
                 <span class="links_name">Categories</span>
               </a>
               <span class="tooltip">Categories</span>
             </li>
             <li>
               <a href="gestionUsers.php">
                 <i class='bx bx-grid-alt'></i>
                 <span class="links_name">Utilisateurs</span>
               </a>
                <span class="tooltip">Utilisateurs</span>
             </li>
             <li>
                 <a href="/mglsi_news_simple/conn.php?role='admin'">
                   <i class='bx bx-grid-alt'></i>
                   <span class="links_name">Accueil</span>
                 </a>
                  <span class="tooltip">Accueil</span>
               </li>

            </ul>
          </div>
          <section class="home-section">
               <div class="container-xl">
               	<div class="table-responsive">
               		<div class="table-wrapper">
               			<div class="table-title">
               				<div class="row">
               					<div class="col-sm-6">
               						<h2>Gestion Des Categories</h2>
               					</div>
               					<div class="col-sm-6">
               						<a href="/mglsi_news_simple/CRUD/CRUD_Categories/add.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Creer Categorie</span></a>
               						<a href="#" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>
               					</div>
               				</div>
               			</div>
               			<table class="table table-striped table-hover">
               				<thead>
               					<tr>
               						<th>
               							<span class="custom-checkbox">
               								<input type="checkbox" id="selectAll">
               								<label for="selectAll"></label>
               							</span>
               						</th>
               						<th>Numero</th>
               						<th>Libelle</th>
               						<th>Actions</th>
               					</tr>
               				</thead>
               				<tbody>
               				    <?php
               				        try
                                    {
                                        $bdd = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'root', '');
                                    }
                                    catch (Exception $e)
                                    {
                                        echo "Erreur de connexion à la base de données : ".$e->getMessage();
                                        $bdd = null;
                                    }

                                    $data = "SELECT * FROM categorie";
                                    $articles = $bdd->prepare($data);
                                    $articles->execute();
               				    ?>

               				    <?php if(!empty($articles)): ?>
               				        <?php foreach ($articles as $article): ?>
                                        <tr>
                                            <td>
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                    <label for="checkbox1"></label>
                                                </span>
                                            </td>

                                            <td><?= $article[0] ?></td>
                                            <td><?= $article[1] ?></td>
                                            <td>
                                                <a href="/mglsi_news_simple/CRUD/CRUD_Categories/update.php?edit=<?php echo $article[0];?>" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                                <a href="/mglsi_news_simple/CRUD/CRUD_Categories/delete.php?del=<?php echo $article[0];?>" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else: ?>
                                    <div class="message">Aucun article trouvé</div>
                                <?php endif ?>

               				</tbody>
               			</table>
               		</div>
               	</div>
               </div>

          </section>
          <script src="/mglsi_news_simple/assets/js/script.js"></script>
    </body>
</html>