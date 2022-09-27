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
					<h1 class="m-0">Sponsor</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Sponsor</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_sponsor"><i class="fa fa-plus"></i>Add Sponser</a> 
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting">Sponsor Logo</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($sponsor as $sponsor)
                                    <tr class="odd">
                                        <td>
                                        <img src="{{asset('img/'.$sponsor->sponsor_logo)}}" height="100px" width="180px" alt="">
                                        </td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$sponsor->id}}" class="btn btn-primary" id="editsponsor" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$sponsor->id}}" class="btn btn-danger" id="sponsorDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Sponsor Modal -->
<div id="add_sponsor" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Sponsor Logo</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('sponsor.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
							<div class="input-group mb-5">
								<label class="col-form-label">Sponsor Logo:&nbsp;</label>
                                <div class="input-group mb-3">
                                    <img src="{{url('backend/image/av.jpg')}}" alt="">
                                </div>
								<input type="file" class="form-control" id="filePhoto" name="filePhoto"required>
							</div>
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
<!-- /Add Sponsor Modal -->

<!-- Edit Sponsor Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Sponsor Logo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('sponsor-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
                            <input type="hidden" value="" id="cmbSponsorId" name="cmbSponsorId" >
								<label class="form-label">Sponsor Logo:&nbsp;</label>
								<div class="input-group mb-3" id="eFilephoto"></div>
                                <input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>	
							</div>
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
<!-- /Edit Sponsor Modal -->
<!-- Delete Sponsor Modal -->
<div class="modal custom-modal fade" id="delete_sponsor" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Sponsor</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-sponsor')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_sponsorId" name="d_sponsor">
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
<!-- /Delete Sponsor Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#sponsorDbtn',function(){
            // alart("ok");
			var sponsor_id=$(this).val();
			$('#delete_sponsor').modal('show');
			$('#delete_sponsorId').val(sponsor_id);
		});

		$(document).on('click','#editsponsor',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-sponsor/"+eid,
				success:function(response){
					$('#cmbSponsorId').val(eid);		
                    $("#eFilephoto").html(
                        `<img src="img/${response.sponsor.sponsor_logo}" width="100" class="img-fluid img-thumbnail">`);
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