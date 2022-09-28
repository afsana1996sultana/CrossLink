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
					<h1 class="m-0">Projects</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Projects</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_project"><i class="fa fa-plus"></i>Add New</a> 
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
                                        <th class="sorting">Slug</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($project as $project)
                                    <tr class="odd">
                                        <td>{{$project-> id}}</td>
                                        <td>
                                        <img src="{{asset('img/'.$project->img)}}" height="70px" width="70px" alt="">
                                        </td>
                                        <td>{{$project-> name}}</td>
                                        <td>{{$project-> slug}}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$project->id}}" class="btn btn-primary" id="editproject" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$project->id}}" class="btn btn-danger" id="projectDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Projects Modal -->
<div id="add_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Projects</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('project-list.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Project Image Preview</label>
                            <div>
                                <img id="preview-img" class="admin-img" src="{{url('backend/assets/photo/preview.png')}}" alt="" height="120px" width="160px">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Project Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto" onchange="previewThumnailImage(event)">
                        </div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtName" name="txtName"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Slug:&nbsp;</label>
                                <input type="text" class="form-control" id="txtSlug" name="txtSlug"required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea name="txtDescription" id="txtDescription" class="summernote"></textarea>
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
<!-- /Add Projects Modal -->

<!-- Edit Projects Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Projects</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('project-list-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" value="" id="cmbProjectId" name="cmbProjectId" >
							<label class="form-label">Project Image Preview:&nbsp;</label>
							<div class="input-group mb-3" id="eFilephoto" alt="" height="120px" width="160px"></div>	
						</div>

                        <div class="form-group col-12">
                            <label>Project Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto" onchange="previewThumnailImage(event)">
                        </div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="eName" name="txtName">
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Slug:&nbsp;</label>
                                <input type="text" class="form-control" id="eSlug" name="txtSlug">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="summernote" id="eDescription" name="txtDescription"></textarea>
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
<!-- /Edit Projects Modal -->
<!-- Delete Projects Modal -->
<div class="modal custom-modal fade" id="delete_project" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Projects</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-project-list')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_projectId" name="d_project">
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
<!-- /Delete Projects Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#projectDbtn',function(){
            // alart("ok");
			var project_id=$(this).val();
			$('#delete_project').modal('show');
			$('#delete_projectId').val(project_id);
		});

		$(document).on('click','#editproject',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-project-list/"+eid,
				success:function(response){
					$('#cmbProjectId').val(eid);		
                    $('#eName').val(response.project.name);	
                    $('#eSlug').val(response.project.slug);
                    $('#eDescription').summernote('code', response.project.description); 	
                    $("#eFilephoto").html(
                        `<img src="img/${response.project.img}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
    
	});

    $("#table-1").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [2,3] }
        ]
    });

    function previewThumnailImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview-img');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};

</script>
@endsection