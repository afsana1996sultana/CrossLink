@extends('layout.backend.home')
@section('page')
<div class="card-body">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Header</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Header</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    <div class="section-body">
        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{url('header/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <div class="form-group col-12">
                                <label>Current Logo</label>
                                <div>
                                    <img src="{{asset('img/'.$header->logo)}}" alt="" sizes="" srcset="" height="60px" width="200px"> 
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label>New Logo</label>
                                <input type="file" name="filelogo" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label for="">Time</label>
                                <input type="text" name="txtTime" class="form-control" value="{{$header->time}}">
                            </div>

                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="txtPhone" class="form-control" value="{{$header->phone}}">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="txtEmail" class="form-control" value="{{$header->email}}">
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