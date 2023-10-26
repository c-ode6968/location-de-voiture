@extends('layouts.basestaff')
@section('content')


<style>

    .table-responsive {
        margin: 10px 0;
    }
    .table-wrapper {
        background: #fff;
        padding: 15px 20px;
        border-radius: 10px;
        min-width: 900px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
        margin-top: 5em;
        margin-left: 8em;
    }
    .table-title {        
        padding-bottom: 15px;
        background: #435d7d;
        color: #fff;
        padding: 10px 30px;
        min-width: 100%;
        margin: -15px -20px 10px;
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
        padding: 10px 6px;
        vertical-align: middle;
    }
    table.table tr th:first-child {
        width: 100px;
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
        font-size: 10px;
        margin: 10 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
        opacity: 0.9;
        font-size: 26px;
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
        font-size: 15px;
    }
    table.table .avatar {
        border-radius: 70%;
        vertical-align: middle;
        margin-right: 10px;
    }

    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
    /* Custom checkbox */
  

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
    
    .back{
            margin-top: 5em;
            color: red;
            justify-content: center;
            font-size: 30px;
            margin-left: 50%;
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

<div class="container-xl">
	<div class="table-responsive d-flex justify-content-center align-items-center" style="height: 100vh;">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Liste <b>Voitures</b></h2>
					</div>
					<div class="col-sm-18">
						<a href="{{route('addvoiture')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Ajouter une voiture</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Marque</th>
						<th>Model</th>
						<th>Plaque</th>
						<th>Aménagement</th>
                        <th>Place </th>
                        <th>Prix</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        
                        <th>Action</th>
					</tr>
				</thead>
                @foreach($voitures as $voiture)
				<tbody>
					<tr>
                        <td>{{$voiture -> idv}}</td>
						<td>{{$voiture -> marque}}</td>
						<td>{{$voiture -> model}}</td>
						<td>{{$voiture -> plaque_immatriculation}}</td>
                        <td>{{$voiture -> aménagement}}</td>
                        <td>{{$voiture -> nombre_de_place}}</td>
                        <td>{{$voiture -> prix_location_journalier}}</td>
                        <td>{{$voiture -> date_debut}}</td>
                        <td>{{$voiture -> date_fin}}</td>
                        
						<td>
							<a href="{{route('voitureedit')}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> 
				</tbody>
                @endforeach
			</table>
		</div>
        
        <style>
          .custom-pagination{
            margin-top: 30px;
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
          }
          
          .custom-pagination li{
            margin: 0 5px;
            font-size: 16px;
            color: #333;
            border: 1px solid #333;
            border-radius: 4px;
            padding: 5px 15px;
            cursor: pointer;      
          }
          custom-pagination li.active{
            background-color: #333;
            color: #fff;
          }
        </style>
	</div>        
</div>
<div class="pag">{{ $voitures->onEachSide(1)->links('pagination.pagination') }}</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>


@endsection