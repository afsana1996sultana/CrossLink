@extends('layout.backend.home')
@section("css")
<link rel="stylesheet" href="{{url('backend/assets/summernote/summernote-bs4.css')}}">
@endsection
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Team Members</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Team Members</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_team"><i class="fa fa-plus"></i>Add New</a> 
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Image</th>
                                        <th class="sorting">Name</th>
                                        <th class="sorting">Designation</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($team as $team)
                                    <tr class="odd">
                                        <td>{{$team-> id}}</td>
                                        <td>
                                        <img src="{{asset('img/'.$team->img)}}" height="70px" width="70px" alt="">
                                        </td>
                                        <td>{{$team-> name}}</td>
                                        <td>{{$team-> designation}}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$team->id}}" class="btn btn-primary" id="editteam" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$team->id}}" class="btn btn-danger" id="teamDbtn" ><i class="fas fa-trash"></i> </button>
                                            </div>
                                        </td>   
                                    </tr>
                                    @empty
                                        <div colspan="14">No records found</div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Team Member Modal -->
<div id="add_team" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Team Member</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
							<div class="input-group mb-5">
								<label class="col-form-label">Image:&nbsp;</label>
                                <div class="input-group mb-3">
                                    <img src="{{url('backend/image/av.jpg')}}" alt="">
                                </div>
								<input type="file" class="form-control" id="filePhoto" name="filePhoto"required>
							</div>
						</div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name: </label>
                                <input type="text" class="form-control" id="txtName" name="txtName"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Email: </label>
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail"required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Designation: </label>
                                <input type="text" class="form-control" id="txtDesignation" name="txtDesignation"required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details <span class="text-danger">*</span></label>
                            <textarea name="txtDetails" id="txtDetails" class="summernote"></textarea>
                        </div>
                    </div>

                    <div class="submit-section float-right">
                        <button type="button" class="btn btn-info" style="width:80px;" data-dismiss="modal">Close</button>
                        <input class="btn btn-primary submit-btn" type="submit" name="btnCreate" style="width:80px;" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Team Member Modal -->

<!-- Edit Team Member Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Team Member</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('team-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
                            <input type="hidden" value="" id="cmbTeamId" name="cmbTeamId" >
								<label class="form-label">Image:&nbsp;</label>
								<div class="input-group mb-3" id="eFilephoto"></div>
                                <input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>	
							</div>
						</div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name: </label>
                                <input type="text" class="form-control" id="eName" name="txtName">
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Email: </label>
                                <input type="email" class="form-control" id="eEmail" name="txtEmail">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Designation: </label>
                                <input type="text" class="form-control" id="eDesignation" name="txtDesignation">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details <span class="text-danger">*</span></label>
                            <textarea class="summernote" id="eDetails" name="txtDetails"></textarea>
                        </div>
					</div>

					<div class="submit-section float-right">
						<button type="button" class="btn btn-info" style="width:80px;" data-dismiss="modal">Cancle</button>
						<input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Team Member Modal -->
<!-- Delete Team Member Modal -->
<div class="modal custom-modal fade" id="delete_team" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Team Member</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-team')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_teamId" name="d_team">
                                <button type="submit" class="btn btn-danger continue-btn">Delete</button>		
							</form>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-info cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Team Member Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#teamDbtn',function(){
            // alart("ok");
			var team_id=$(this).val();
			$('#delete_team').modal('show');
			$('#delete_teamId').val(team_id);
		});

		$(document).on('click','#editteam',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-team/"+eid,
				success:function(response){
					$('#cmbTeamId').val(eid);		
                    $('#eName').val(response.team.name);	
                    $('#eEmail').val(response.team.email);
                    $('#eDesignation').val(response.team.designation);
                    $('#eDetails').summernote('code', response.team.details); 	
                    $("#eFilephoto").html(
                        `<img src="img/${response.team.img}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
    
	});

    $("#table-1").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [2,3] }
        ]
    });

</script>
@endsection