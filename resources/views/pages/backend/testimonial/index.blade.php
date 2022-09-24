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
					<h1 class="m-0">Testimonial</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Testimonial</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_testimonial"><i class="fa fa-plus"></i>Add Testimonial</a> 
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
                                    @forelse ($testimonial as $testimonial)
                                    <tr class="odd">
                                        <td>{{$testimonial-> id}}</td>
                                        <td>
                                        <img src="{{asset('img/'.$testimonial->img)}}" height="70px" width="70px" alt="">
                                        </td>
                                        <td>{{$testimonial-> name}}</td>
                                        <td>{{$testimonial-> designation}}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$testimonial->id}}" class="btn btn-primary" id="edittestimonial" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$testimonial->id}}" class="btn btn-danger" id="testimonialDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Testimonial Modal -->
<div id="add_testimonial" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Testimonial</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
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
                                <label class="col-form-label">Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtName" name="txtName"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Designation:&nbsp;</label>
                                <input type="text" class="form-control" id="txtDesignation" name="txtDesignation"required>
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
<!-- /Add Testimonial Modal -->

<!-- Edit Testimonial Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Testimonial</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('testimonial-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
                            <input type="hidden" value="" id="cmbTestimonialId" name="cmbTestimonialId" >
								<label class="form-label">Image:&nbsp;</label>
								<div class="input-group mb-3" id="eFilephoto"></div>
                                <input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>	
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Name:&nbsp;</label>
								<input type="text" class="form-control" id="eName" name="txtName">
							</div>
						</div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Designation:&nbsp;</label>
                                <input type="text" class="form-control" id="eDesignation" name="txtDesignation"required>
                            </div>
                        </div>


                        <div class="form-group col-12">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea name="txtDescription" class="summernote">{{$testimonial->description}}</textarea>
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
<!-- /Edit Testimonial Modal -->
<!-- Delete Testimonial Modal -->
<div class="modal custom-modal fade" id="delete_testimonial" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Testimonial</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-testimonial')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_testimonialId" name="d_testimonial">
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
<!-- /Delete Testimonial Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#testimonialDbtn',function(){
            // alart("ok");
			var testimonial_id=$(this).val();
			$('#delete_testimonial').modal('show');
			$('#delete_testimonialId').val(testimonial_id);
		});

		$(document).on('click','#edittestimonial',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-testimonial/"+eid,
				success:function(response){
					$('#cmbTestimonialId').val(eid);		
                    $('#eName').val(response.testimonial.name);	
                    $('#eDesignation').val(response.testimonial.designation);
                    // $('#textarea').html(response.testimonial.description);	
                    $("#eFilephoto").html(
                        `<img src="img/${response.testimonial.img}" width="100" class="img-fluid img-thumbnail">`);
				}
			});
		});
    
	});

    $(document).ready(function () {
        $('.summernote').summernote();
    });

    $("#table-1").dataTable({
        "columnDefs": [
            { "sortable": false, "targets": [2,3] }
        ]
    });

</script>
@section('js')
<script src="{{url('backend/assets/summernote/summernote-bs4.js')}}"></script>
@endsection
@endsection