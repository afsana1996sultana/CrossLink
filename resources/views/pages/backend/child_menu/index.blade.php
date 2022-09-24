@extends('layout.backend.home')

@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Child Menu</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Child Menu</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
		<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_childmenu"><i class="fa fa-plus"></i>Add ChildMenu</a> 
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th class="sorting sorting_asc">SN</th>
                                        <th class="sorting">ChildMenu</th>
                                        <th class="sorting">SubMenu</th>
                                        <th class="sorting">Menu</th>
                                        <th class="sorting">Slug</th>
                                        <th class="sorting">Icon</th>
                                        <th class="sorting">Status</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($childmenu as $childmenu)
                                    <tr class="odd">
                                        <td>{{$childmenu-> id}}</td>
                                        <td>{{$childmenu-> childmenu_name}}</td>
                                        <td>{{$childmenu-> submenu_name}}</td>
                                        <td>{{$childmenu-> menu_name}}</td>
                                        <td>{{$childmenu-> slug}}</td>
                                        <td><i class="{{$childmenu-> icon}}" ></i></td>
										<td>
                                            @if($childmenu->status==1)
                                            <div>
                                              <span class="badge badge-success">{{$childmenu->s_name}}</span>
                                            </div>
                                            @else($childmenu->status==2)
                                            <div>
                                              <span class="badge badge-danger">{{$childmenu->s_name}}</span>
                                            </div>
                                            @endif
                                        </td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" value="{{$childmenu->id}}" class="btn btn-primary" id="editchildmenu" ><i class="fas fa-pencil-alt" ></i></button>&nbsp;
                                                <button type="button" value="{{$childmenu->id}}" class="btn btn-danger" id="childmenuDbtn" ><i class="fas fa-trash"></i> </button>
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

<!-- Add Child-Menu Modal -->
<div id="add_childmenu" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-edit">Add ChildMenu</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add member--}}
            <div class="modal-body">
                <form action="{{route('child-menu.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Childmenu Name:&nbsp;</label>
                                <input type="text" class="form-control" id="txtChildmenuName" name="txtChildmenuName"required>
                            </div>
                        </div>	


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">SubMenu Name:&nbsp;</label>
								<select id="txtSubmenuId" class="form-control" name="txtSubmenuId" required>
									<option selected><-----Select SubMenu----></option>
									@foreach ($submenu as $val)
									<option value="{{ $val->id }}">{{ $val->submenu_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Menu Name:&nbsp;</label>
								<select id="txtMenuId" class="form-control" name="txtMenuId" required>
									<option selected><-----Select Menu----></option>
									@foreach ($menu as $val)
									<option value="{{ $val->id }}">{{ $val->menu_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Slug:&nbsp;</label>
                                <input type="text" class="form-control" id="txtSlug" name="txtSlug"required>
                            </div>
                        </div>

                        <div class="form-group col-12 iconpicker-container">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Icon:&nbsp;</label>
                                <input type="text" class="form-control custom-icon-picker" id="txtIcon" name="txtIcon"required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Status:&nbsp;</label>
								<select id="txtStatus" class="form-control" name="txtStatus" required>
									<option selected><-----Select Status----></option>
									@foreach ($status as $val)
									<option value="{{ $val->id }}">{{ $val->s_name }}</option>
									@endforeach
								</select>
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
<!-- /Add Child-Menu Modal -->

<!-- Edit Child-Menu Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit ChildMenu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('child-menu-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-12">
							<div class="input-group mb-4">
								<input type="hidden" value="" id="cmbChildmenuId" name="cmbChildmenuId" >
								<label class="col-form-label">Childmenu Name:&nbsp;</label>
								<input type="text" class="form-control" id="eChildmenuName" name="txtChildmenuName">
							</div>
						</div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">SubMenu Name:&nbsp;</label>
								<select id="eSubmenuId" class="form-control" name="txtSubmenuId" required>
									<option selected><-----Select SubMenu----></option>
									@foreach ($submenu as $val)
									<option value="{{ $val->id }}">{{ $val->submenu_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="input-group mb-5">
                                <label class="col-form-label">Menu Name:&nbsp;</label>
								<select id="eMenuId" class="form-control" name="txtMenuId" required>
									<option selected><-----Select Menu----></option>
									@foreach ($menu as $val)
									<option value="{{ $val->id }}">{{ $val->menu_name }}</option>
									@endforeach
								</select>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Slug:&nbsp;</label>
								<input type="text" class="form-control" id="eSlug" name="txtSlug">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Icon:&nbsp;</label>
								<input type="text" class="form-control" id="eIcon" name="txtIcon">
							</div>
						</div>

                        <div class="col-sm-12">
							<div class="input-group mb-4">
								<label class="col-form-label">Status:&nbsp;</label>
								<select id="eStatus" class="form-control" name="txtStatus" required>
									<option selected><-----Select Status----></option>
									@foreach ($status as $val)
									<option value="{{ $val->id }}">{{ $val->s_name }}</option>
									@endforeach
								</select>
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
<!-- /Edit Child-Menu Modal -->
<!-- Delete Child-Menu Modal -->
<div class="modal custom-modal fade" id="delete_childmenu" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Child-Menu</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-child-menu')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_childmenuId" name="d_childmenu">
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
<!-- /Delete Child-Menu Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#childmenuDbtn',function(){
            // alart("ok");
			var childmenu_id=$(this).val();
			$('#delete_childmenu').modal('show');
			$('#delete_childmenuId').val(childmenu_id);
		});

		$(document).on('click','#editchildmenu',function(){
			//  alert("ok");

			var eid=$(this).val();
			// alert(id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-child-menu/"+eid,
				success:function(response){
					$('#cmbChildmenuId').val(eid);		
					$('#eChildmenuName').val(response.childmenu.childmenu_name);
                    $('#eMenuId').val(response.childmenu.menu_id);
                    $('#eSubmenuId').val(response.childmenu.submenu_id);
                    $('#eSlug').val(response.childmenu.slug);
                    $('#eIcon').val(response.childmenu.icon);
                    $('#eStatus').val(response.childmenu.status);
					
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