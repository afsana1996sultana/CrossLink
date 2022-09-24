@extends('layout.backend.home')
@section('page')
<div class="card-body">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Footer</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Footer</li>
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
                        <form action="{{url('footer/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <div class="form-group col-12">
                                <label>Current Logo</label>
                                <div>
                                    <img src="{{asset('img/'.$footer->f_logo)}}" alt="" sizes="" srcset="" height="60px" width="200px"> 
                                </div>
                            </div>


                            <div class="form-group col-12">
                                <label>New Logo</label>
                                <input type="file" name="filelogo" class="form-control-file">
                            </div>


                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="txtFooterEmail" class="form-control" value="{{$footer->f_email}}">
                            </div>


                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="txtfooterPhone" class="form-control" value="{{$footer->f_phone}}">
                            </div>


                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="txtfooterAddress" class="form-control" value="{{$footer->f_address}}">
                            </div>


                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="txtfooterDescription" class="form-control" value="{{$footer->f_description}}">
                            </div>


                            <div class="form-group">
                                <label for="">Copyright</label>
                                <input type="text" name="txtfootercopyright" class="form-control" value="{{$footer->f_copyright}}">
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