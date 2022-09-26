@extends('layout.backend.home')
@section('page')
<div class="card-body">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">About</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">About</li>
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
                        <form action="{{url('about/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <div class="form-group col-12 mb-4">
                                <label>Current Image-1</label>
                                <div>
                                    <img src="{{asset('img/'.$about->img1)}}" alt="" sizes="" srcset="" height="200px" width="400px"> 
                                </div>
                            </div>

                            <div class="form-group col-12 mb-4">
                                <label>New Image-1 <span class="text-danger">*</span></label>
                                <input type="file" name="fileimg1" class="form-control-file">
                            </div>


                            <div class="form-group col-12 mb-4">
                                <label for="">Header-1 <span class="text-danger">*</span></label>
                                <input type="text" name="txtHeader1" class="form-control" value="{{$about->header1}}">
                            </div>


                            <div class="form-group col-12 mb-4">
                                <label for="">Title-1 <span class="text-danger">*</span></label>
                                <input type="text" name="txtTitle1" class="form-control" value="{{$about->title1}}">
                            </div>


                            <div class="form-group col-12 mb-4">
                                <label>Long Description-1 <span class="text-danger">*</span></label>
                                <textarea name="txtLongDescription1" class="summernote">{{$about->long_description1}}</textarea>
                            </div>


                            <div class="form-group col-12 mb-4">
                                <label>Current Image-2</label>
                                <div>
                                    <img src="{{asset('img/'.$about->img2)}}" alt="" sizes="" srcset="" height="200px" width="400px"> 
                                </div>
                            </div>

                            <div class="form-group col-12 mb-4">
                                <label>New Image-2 <span class="text-danger">*</span></label>
                                <input type="file" name="fileimg2" class="form-control-file">
                            </div>

                            <div class="form-group col-12 mb-4">
                                <label for="">Header-2 <span class="text-danger">*</span></label>
                                <input type="text" name="txtHeader2" class="form-control" value="{{$about->header2}}">
                            </div>
                            

                            <div class="form-group col-12 mb-4">
                                <label for="">Title-2 <span class="text-danger">*</span></label>
                                <input type="text" name="txtTitle2" class="form-control" value="{{$about->title2}}">
                            </div>

                            <div class="form-group col-12 mb-4">
                                <label>Long Description-2 <span class="text-danger">*</span></label>
                                <textarea name="txtLongDescription2" class="summernote">{{$about->long_description2}}</textarea>
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