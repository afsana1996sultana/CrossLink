@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Comments</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Comments</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    
    <div class="section-body">
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                    <th class="sorting">SN</th>
                                    <th class="sorting">Blog Title </th>
                                    <th class="sorting">Comments</th>
                                    <th class="sorting">Published Status</th>
                                    <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($comment as $comment)
                                    <tr class="odd">
                                        <td>{{$comment-> id}}</td>
                                        <td>{{$comment-> title}}</td>
                                        <td>{{$comment-> comments}}</td>
										<td>
                                            @if($comment->published_status==1)
                                            <div>
                                              <span class="badge badge-success">Active</span>
                                            </div>
                                            @else($comment->published_status==0)
                                            <div>
                                              <span class="badge badge-danger">Deactive</span>
                                            </div>
                                            @endif
                                        </td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{URL::to('blog_details/'.$comment->slug)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>&nbsp;
                                                <button type="button" value="{{$comment->id}}" class="btn btn-warning" id="editcomment" ><i class="fas fa-edit" ></i> </button>&nbsp;
                                                <button type="button" value="{{$comment->id}}" class="btn btn-danger" id="commentDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Edit Comments Modal -->
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Comment Status</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url('comment-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
                        <div class="col-sm-12">
							<div class="input-group mb-4">
                                <input type="hidden" value="" id="cmbCommentId" name="cmbCommentId" >
								<label class="col-form-label">Publication Status:&nbsp;</label>
                                <select name="txtPublishedStatus" id="ePublishedStatus" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                                
							</div>
						</div>
					</div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Comments Modal -->
<!-- Delete Comments Modal -->
<div class="modal custom-modal fade" id="delete_comment" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Comments</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-comment')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_commentId" name="d_comment">
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
<!-- /Delete Comments Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#commentDbtn',function(){
            // alart("ok");
			var comment_id=$(this).val();
			$('#delete_comment').modal('show');
			$('#delete_commentId').val(comment_id);
		});

		
		$(document).on('click','#editcomment',function(){
            //  alert("ok");

            var eid=$(this).val();
            // alert(id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-comment/"+eid,
                success:function(response){
                    $('#cmbCommentId').val(eid);		
                    $('#ePublishedStatus').val(response.comment.published_status);
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