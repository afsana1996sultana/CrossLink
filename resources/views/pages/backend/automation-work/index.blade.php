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
					<h1 class="m-0">Automation Work</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Automation Work</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_automation"><i class="fa fa-plus"></i>Add New</a> 
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">Name</th>
                                        <th class="sorting">Icon</th>
                                        <th class="sorting">Details</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($automation as $automation)
                                    <tr class="odd">
                                        <td>{{$automation-> id}}</td>
                                        <td>{{$automation-> header}}</td>
                                        <td>{{$automation-> icon}}</td>
                                        <td>{{$automation-> detail}}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$automation->id}}" class="btn btn-primary" id="editautomation" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$automation->id}}" class="btn btn-danger" id="automationDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Automation Work Modal -->
<div id="add_automation" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Automation Work</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('automation-work.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtHeader" name="txtHeader"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Icon:&nbsp;</label>
                                <input type="text" class="form-control" id="txtIcon" name="txtIcon"required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Details</label>
                            <textarea name="txtDetail" id="txtDetail" cols="30" rows="10" class="form-control text-area-5"></textarea>
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
<!-- /Add Automation Work Modal -->

<!-- Edit Automation Work Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Automation Work</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('automation-work-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <input type="hidden" value="" id="cmbAutomationId" name="cmbAutomationId" >
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="eHeader" name="txtHeader">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Icon:&nbsp;</label>
                                <input type="text" class="form-control" id="eIcon" name="txtIcon"required>
                            </div>
                        </div>


                        <div class="form-group col-12">
                            <label>Details</label>
                            <textarea name="txtDetail" id="eDetail" cols="30" rows="10" class="form-control text-area-5"></textarea>
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
<!-- /Edit Automation Work Modal -->
<!-- Delete Automation Work Modal -->
<div class="modal custom-modal fade" id="delete_automation" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Automation Work</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-automation-work')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_automationId" name="d_automation">
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
<!-- /Delete Automation Work Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#automationDbtn',function(){
            // alart("ok");
			var automation_id=$(this).val();
			$('#delete_automation').modal('show');
			$('#delete_automationId').val(automation_id);
		});

		$(document).on('click','#editautomation',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-automation-work/"+eid,
				success:function(response){
					$('#cmbAutomationId').val(eid);		
                    $('#eHeader').val(response.automation.header);	
                    $('#eIcon').val(response.automation.icon);	
                    $('#eDetail').val(response.automation.detail);	
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