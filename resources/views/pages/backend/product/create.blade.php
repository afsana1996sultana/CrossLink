@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Create Prodect</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Create Prodect</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

    
    <div class="section-body">
        <a href="{{url('product')}}" class="btn btn-primary"><i class="fas fa-list"></i> Products</a>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {{--@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif--}}
                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Thumbnail Image Preview</label>
                                    <div>
                                        <img id="preview-img" class="admin-img" src="{{url('backend/assets/photo/preview.png')}}" alt="" height="120px" width="160px">
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label>Thumnail Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_p_img" onchange="previewThumnailImage(event)">
                                </div>

                                <div class="form-group col-4">
                                    <label>Product Image-1 <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_otherimg1">
                                </div>


                                <div class="form-group col-4">
                                    <label>Product Image-2 <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_otherimg2">
                                </div>


                                <div class="form-group col-4">
                                    <label>Product Image-3 <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  name="file_otherimg3">
                                </div>

                                <div class="form-group col-12">
                                    <label>Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="txtProductName" class="form-control"  name="txtProductName" required>
                                </div>

                                <div class="form-group col-12">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" id="txtTitle" class="form-control"  name="txtTitle" required>
                                </div>

                                <div class="form-group col-12">
                                    <label>Slug <span class="text-danger">*</span></label>
                                    <input type="text" id="txtSlug" class="form-control"  name="txtSlug" required>
                                </div>

                                <div class="form-group col-12">
                                    <label>Icon <span class="text-danger">*</span></label>
                                    <input type="text" id="txtIcon" class="form-control"  name="txtIcon" required>
                                </div>

                                <div class="form-group col-12">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select id="txtCategory" class="form-control" name="txtCategory" required>
                                        <option selected value=""><-----Choose Category----></option>
                                        @foreach ($menu as $val)
                                        <option value="{{ $val->id }}">{{ $val->menu_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <label>Sub Category</label>
                                    <select id="txtSubcategory" class="form-control" name="sub_category">
                                        <option selected value=""><-----Choose Sub-Category----></option>
                                        @foreach ($submenu as $val)
                                        <option value="{{ $val->id }}">{{ $val->submenu_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-12">
                                    <label>Child Category</label>
                                    <select id="txtChildcategory" class="form-control" name="child_category">
                                        <option selected value=""><-----Choose Child-Category----></option>
                                        @foreach ($childmenu as $val)
                                        <option value="{{ $val->id }}">{{ $val->childmenu_name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-12">
                                    <label>Short Description <span class="text-danger">*</span></label>
                                    <textarea name="txtShortDescription" id="txtShortDescription" class="summernote"></textarea>

                                </div>

                                <div class="form-group col-12">
                                    <label>Long Description <span class="text-danger">*</span></label>
                                    <textarea name="txtLongDescription" id="txtLongDescription" class="summernote"></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <select id="txtStatus" class="form-control" name="txtStatus" required>
                                        <option selected><-----Select Status----></option>
                                        @foreach ($status as $val)
                                        <option value="{{ $val->id }}">{{ $val->s_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row pt-4">
                                <div class="col-12">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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