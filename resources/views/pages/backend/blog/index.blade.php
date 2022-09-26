@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Blogs</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Blogs</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    
    <div class="section-body">
        <a href="{{ route('blog-list.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add New</a> 
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                    <th class="sorting sorting_asc">SN</th>
                                    <th class="sorting">Title</th>
                                    <th class="sorting">Image</th>
                                    <th class="sorting">Slug</th>
                                    <th class="sorting">Status</th>
                                    <th class="sorting">Action</th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    @forelse ($blog as $blog)
                                    <tr class="odd">
                                        <td>{{$blog-> id}}</td>
                                        <td>{{$blog-> title}}</td>
                                        <td><img src="{{asset('img/'.$blog->blog_img)}}" height="90px" width="90px" alt=""></td>
                                        <td>{{$blog-> slug}}</td>
                                        <td>
                                            @if($blog->status==1)
                                            <div>
                                              <span class="badge badge-success">{{$blog->s_name}}</span>
                                            </div>
                                            @else($blog->status==2)
                                            <div>
                                              <span class="badge badge-danger">{{$blog->s_name}}</span>
                                            </div>
                                            @endif
                                        </td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{url('blog-list/'.$blog->id.'/edit')}}" class="btn btn-primary"><i class="fas fa-pencil-alt" ></i></a>&nbsp;
                                                <button type="button" value="{{$blog->id}}" class="btn btn-danger" id="blogDbtn" ><i class="fas fa-trash"></i> </button>
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
<!-- Delete Blog Modal -->
<div class="modal custom-modal fade" id="delete_blog" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header" style="text-align:center;">
					<h3>Delete Blog</h3>
					<p>Are you sure want to delete?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row float-right">
						<div class="col-6">
							<form action="{{url('delete-blog')}}" method="post" >
								@csrf
								@method("DELETE")
                                <input type="hidden" id="delete_blogId" name="d_blog">
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
<!-- /Delete Blog Modal -->

<script>
	$(document).ready(function(){

        $(document).on('click','#blogDbtn',function(){
            // alart("ok");
			var blog_id=$(this).val();
			$('#delete_blog').modal('show');
			$('#delete_blogId').val(blog_id);
		});
    
	});

$("#table-1").dataTable({
	"columnDefs": [
		{ "sortable": false, "targets": [2,3] }
	]
});

</script>
@endsection