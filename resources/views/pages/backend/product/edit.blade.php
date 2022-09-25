@extends('layout.backend.home')
@section('page')
<div class="card-body">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Prodect</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
						<li class="breadcrumb-item active">Edit Prodect</li>
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
                    <form action="{{url('product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')                        
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Thumbnail Image Preview</label>
                                <div>
                                    <img id="preview-img" src="{{asset('img/'.$product->p_img)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label>Thumnail Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file"  name="file_p_img" onchange="previewThumnailImage(event)">
                            </div>

                            <div class="form-group col-4">
                                <label>Current Product Image-1</label>
                                <div>
                                <img src="{{asset('img/'.$product->other_img1)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                </div>
                            </div>


                            <div class="form-group col-4">
                                <label>Current Product Image-2</label>
                                <div>
                                <img src="{{asset('img/'.$product->other_img2)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                </div>
                            </div>


                            <div class="form-group col-4">
                                <label>Current Product Image-3</label>
                                <div>
                                <img src="{{asset('img/'.$product->other_img3)}}" alt="" sizes="" srcset="" height="120px" width="160px"> 
                                </div>
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
                                <input type="text" id="txtProductName" class="form-control"  name="txtProductName" value="{{$product->p_name}}">
                            </div>


                            <div class="form-group col-12">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" id="txtTitle" class="form-control"  name="txtTitle" value="{{$product->title}}">
                            </div>

                            <div class="form-group col-12">
                                <label>Slug <span class="text-danger">*</span></label>
                                <input type="text" id="txtSlug" class="form-control"  name="txtSlug" value="{{$product->slug}}">
                            </div>


                            <div class="form-group col-12">
                                <label>Icon <span class="text-danger">*</span></label>
                                <input type="text" id="txtIcon" class="form-control"  name="txtIcon" value="{{$product->icon}}">
                            </div>

                            <div class="form-group col-12">
                                <label>Category <span class="text-danger">*</span></label>
                                <select id="txtCategory" class="form-control" name="txtCategory">
                                    <option selected><-----Choose Category----></option>
                                    @foreach ($menu as $val)
                                    <option value="{{ $val->id }}" {{ ( $val->id == $product->category) ? 'selected' : '' }}>
                                        {{ $val->menu_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-12">
                                <label>Sub Category <span class="text-danger">*</span></label>
                                <select id="txtSubcategory" class="form-control" name="txtSubcategory">
                                    <option selected><-----Choose Category----></option>
                                    @foreach ($submenu as $val)
                                    <option value="{{ $val->id }}" {{ ( $val->id == $product->sub_category) ? 'selected' : '' }}>
                                        {{ $val->submenu_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-12">
                                <label>Short Description <span class="text-danger">*</span></label>
                                <textarea name="txtShortDescription" id="txtShortDescription" class="summernote">{{$product->short_desctiption}}</textarea>

                            </div>

                            <div class="form-group col-12">
                                <label>Long Description <span class="text-danger">*</span></label>
                                <textarea name="txtLongDescription" id="txtLongDescription" class="summernote">{{$product->long_description}}</textarea>
                            </div>
                            
                            <div class="form-group col-12">
                                <label class="col-form-label">Status</label>
                                <select id="txtStatus" class="form-control" name="txtStatus">
                                    @foreach ($status as $val)
                                    <option value="{{ $val->id }}" {{ ( $val->id == $product->status) ? 'selected' : '' }}>
                                        {{ $val->s_name }}
                                    </option>
                                    @endforeach
                                </select>  
                            </div>
                        </div>

                        <div class="row pt-4">
                            <div class="col-12">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
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