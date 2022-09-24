@extends('layout.backend.home')
@section('page')
<div class="card-body">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Topbar</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Topbar</li>
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
                        <form action="{{url('topbar/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                                 
                            <div class="form-group">
                                <label for="">Suplier</label>
                                <input type="text" name="txtSuplier" class="form-control" value="{{$topbar->suplier}}">
                            </div>

                            <div class="form-group">
                                <label for="">Certificate</label>
                                <input type="text" name="txtCertificate" class="form-control" value="{{$topbar->certificate}}">
                            </div>

                            <div class="form-group">
                                <label for="">Service</label>
                                <input type="text" name="txtService" class="form-control" value="{{$topbar->service}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection