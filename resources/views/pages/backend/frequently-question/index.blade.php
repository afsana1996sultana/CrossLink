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
					<h1 class="m-0">Frequently Asked Questions</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Frequently Asked Questions</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_frequently"><i class="fa fa-plus"></i>Add Question</a> 
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
                                        <th class="sorting">Question</th>
                                        <th class="sorting">Answer</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($frequently as $frequently)
                                    <tr class="odd">
                                        <td>{{$frequently-> id}}</td>
                                        <td>
                                        <img src="{{asset('img/'.$frequently->img)}}" height="70px" width="70px" alt="">
                                        </td>
                                        <td>{{$frequently-> question}}</td>
                                        <td>{{$frequently-> answer}}</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$frequently->id}}" class="btn btn-primary" id="editfrequently" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$frequently->id}}" class="btn btn-danger" id="frequentlyDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Frequently Asked Questions Modal -->
<div id="add_frequently" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Question</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('frequently-asked-question.store')}}" method="post" enctype="multipart/form-data">
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
                                <label class="col-form-label">Question:&nbsp;</label>
                                <input type="text" class="form-control" id="txtQuestion" name="txtQuestion"required>
                            </div>
                        </div>	

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Answer:&nbsp;</label>
                                <input type="text" class="form-control" id="txtAnswer" name="txtAnswer"required>
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
<!-- /Add Frequently Asked Questions Modal -->

<!-- Edit Frequently Asked Questions Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Question</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('frequently-asked-question-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
                            <input type="hidden" value="" id="cmbFrequentlyaskedId" name="cmbFrequentlyaskedId" >
								<label class="form-label">Image:&nbsp;</label>
								<div class="input-group mb-3" id="eFilephoto"></div>
                                <input type="file" class="form-control" name="filePhoto"  placeholder="image"><br>	
							</div>
						</div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Question:&nbsp;</label>
                                <input type="text" class="form-control" id="eQuestion" name="txtQuestion">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Answer:&nbsp;</label>
                                <input type="text" class="form-control" id="eAnswer" name="txtAnswer">
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
<!-- /Edit Frequently Asked Questions Modal -->
<!-- Delete Frequently Asked Questions Modal -->
<div class="modal custom-modal fade" id="delete_frequently" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Question</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-frequently-asked-question')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_frequentlyId" name="d_frequently">
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
<!-- /Delete Frequently Asked Questions Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#frequentlyDbtn',function(){
            // alart("ok");
			var frequently_id=$(this).val();
			$('#delete_frequently').modal('show');
			$('#delete_frequentlyId').val(frequently_id);
		});

		$(document).on('click','#editfrequently',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-frequently-asked-question/"+eid,
				success:function(response){
					$('#cmbFrequentlyaskedId').val(eid);		
                    $('#eQuestion').val(response.frequently.question);	
                    $('#eAnswer').val(response.frequently.answer);	
                    $("#eFilephoto").html(
                        `<img src="img/${response.frequently.img}" width="100" class="img-fluid img-thumbnail">`);
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