@extends('layout.backend.home')
@section('page')
<div class="card-body">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Career</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Career</li>
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
                        <form action="{{url('career-data/1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <div class="row">
                                <div class="form-group col-12 mb-4">
                                    <label>Current Image-1</label>
                                    <div>
                                        <img src="{{asset('img/'.$career->img1)}}" alt="" sizes="" srcset="" height="170px" width="300px"> 
                                    </div>
                                </div>

                                <div class="form-group col-12 mb-4">
                                    <label>New Image-1 <span class="text-danger">*</span></label>
                                    <input type="file" name="fileimg1" class="form-control-file">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6 mb-4">
                                    <label for="">Header-1 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtHeader1" class="form-control" value="{{$career->header1}}">
                                </div>


                                <div class="form-group col-6 mb-4">
                                    <label for="">Title-1 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtTitle1" class="form-control" value="{{$career->title1}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 mb-4">
                                    <label>Long Description-1 <span class="text-danger">*</span></label>
                                    <textarea name="txtLongDescription1" class="summernote">{{$career->long_description1}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 mb-4">
                                    <label>Current Image-2</label>
                                    <div>
                                        <img src="{{asset('img/'.$career->img2)}}" alt="" sizes="" srcset="" height="170px" width="300px"> 
                                    </div>
                                </div>

                                <div class="form-group col-12 mb-4">
                                    <label>New Image-2 <span class="text-danger">*</span></label>
                                    <input type="file" name="fileimg2" class="form-control-file">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6 mb-4">
                                    <label for="">Header-2 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtHeader2" class="form-control" value="{{$career->header2}}">
                                </div>
                                

                                <div class="form-group col-6 mb-4">
                                    <label for="">Title-2 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtTitle2" class="form-control" value="{{$career->title2}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12 mb-4">
                                    <label>Long Description-2 <span class="text-danger">*</span></label>
                                    <textarea name="txtLongDescription2" id="txtLongDescription2" cols="30" rows="10" class="form-control text-area-5">{{$career->long_description2}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process-1 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessName1" class="form-control" value="{{$career->w_p_name1}}">
                                </div>


                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process-2 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessName2" class="form-control" value="{{$career->w_p_name2}}">
                                </div>


                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process-3 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessName3" class="form-control" value="{{$career->w_p_name3}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process Icon-1 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessIcon1" class="form-control" value="{{$career->w_p_icon1}}">
                                </div>


                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process Icon-2 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessIcon2" class="form-control" value="{{$career->w_p_icon2}}">
                                </div>

                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process Icon-3 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessIcon3" class="form-control" value="{{$career->w_p_icon3}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process Detail-1 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessDetail1" class="form-control" value="{{$career->w_p_detail1}}">
                                </div>


                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process Detail-2 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessDetail2" class="form-control" value="{{$career->w_p_detail2}}">
                                </div>


                                <div class="form-group col-4 mb-4">
                                    <label for="">Work Process Detail-3 <span class="text-danger">*</span></label>
                                    <input type="text" name="txtWorkProcessDetail3" class="form-control" value="{{$career->w_p_detail1}}">
                                </div>
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