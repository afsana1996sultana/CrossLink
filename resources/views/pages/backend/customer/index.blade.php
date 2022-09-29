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
					<h1 class="m-0">Customers</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Customers</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_customer"><i class="fa fa-plus"></i>Add New</a> 
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting">Customer Logo</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($customer as $customer)
                                    <tr class="odd">
                                        <td>
                                        <img src="{{asset('img/'.$customer->customer_logo)}}" height="100px" width="180px" alt="">
                                        </td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$customer->id}}" class="btn btn-primary" id="editcustomer" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$customer->id}}" class="btn btn-danger" id="customerDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Customers Modal -->
<div id="add_customer" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add Customer Logo</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('customer-list.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Customer Image Preview</label>
                            <div>
                                <img id="preview-img" class="admin-img" src="{{url('backend/assets/photo/preview.png')}}" alt="" height="120px" width="160px">
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label>Customer Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto" onchange="previewThumnailImage(event)">
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
<!-- /Add Customers Modal -->

<!-- Edit Customers Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Customer Logo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('customer-list-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" value="" id="cmbCustomerId" name="cmbCustomerId" >
							<label class="form-label">Customer Image Preview:&nbsp;</label>
							<div class="input-group mb-3" id="eFilephoto" alt=""></div>	
						</div>

                        <div class="form-group col-12">
                            <label>Project Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="filePhoto" name="filePhoto" onchange="previewThumnailImage(event)">
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
<!-- /Edit Customers Modal -->
<!-- Delete Customers Modal -->
<div class="modal custom-modal fade" id="delete_customer" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Customer</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-customer-list')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_customerId" name="d_customer">
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
<!-- /Delete Customers Modal -->
<script>
	$(document).ready(function(){

        $(document).on('click','#customerDbtn',function(){
            // alart("ok");
			var customer_id=$(this).val();
			$('#delete_customer').modal('show');
			$('#delete_customerId').val(customer_id);
		});

		$(document).on('click','#editcustomer',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-customer-list/"+eid,
				success:function(response){
					$('#cmbCustomerId').val(eid);		
                    $("#eFilephoto").html(
                        `<img src="img/${response.customer.customer_logo}" height="120px" width="160px class="img-fluid img-thumbnail">`);
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