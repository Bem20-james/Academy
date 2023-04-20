@extends('admin.layouts.Admin')
@section('admin_contents')

    <!-- Content Wrapper. Contains page content -->
<div class="">
    <section class="content-header bg-dark pinned-2">
        <div class="">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Courses</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Courses-view</li>
                    </ol>
                </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-5 ml-3">
        <a href="{{ route('view.course') }}" class="btn btn-success shadow-lg">View Course</a>
    </div>

    <!-- Main content -->
    <section class="content" id="courseAttr">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @if(count($errors) > 0)
                                    <ul class="list-group">
                                @foreach($errors->all() as $error)
                                <li class="list-group-item text-danger">
                                    {{ $error }}
                                </li>
                                @endforeach
                                        </ul>
                                    @endif
                            </div>
                        </div>
                    </div>

                    <form class="px-4 mb-4" action="{{ route('update.course',['id']) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="course_name">Course Name</label>
                                <input type="text" class="form-control" name="course_name" value="{{ $courses['editCourse']->course_name }}"  placeholder="Course Name" max="400">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputSlug">Slug</label>
                                <input type="text" class="form-control" value="{{ $courses['editCourse']->course_slug }}" id="slug" placeholder="slug">
                            </div>
                            <div class="form-group col-lg-6 col-12 mt-2">
                                <div class="col-12 col-lg-12 col-md-12">
                                    <label class="pull-left" for="course_category">Course Category</label>
                                </div>

                                <div class="col-12 col-lg-12 col-md-12">
                                    <select class="form-control parent-category" name="course_category" id="course_cat" required>
                                        <option value="" disabled selected>Please select Category</option>
                                        @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="form-group col-lg-6 col-12 mt-2">
                            <div class="col-12 col-lg-12 col-md-12">
                                <label class="pull-left" for="slug">Course Sub-category</label>
                            </div>

                            <div class="col-12 col-lg-12 col-md-12">
                                <div id="subCatSelect">
                                    <select class="form-control sub-category" id="subCat" name="course_subcategory" disabled required>
                                        <option value="" disabled selected>Please select Sub Category</option>
                                    </select>
                                    <div id="subCatLoader" style="display: none;">
                                        <div class="lds-roller">
                                            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <div class="form-group col-md-12">
                                <label for="inputCategoryName4">Course Image</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile01">choose file</label>
                                    <input type="file" class="custom-file-input" name="category_img" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <div class="card-header text-center">
                                <h3 class="heading">COURSE ATTRIBUTES</h3>
                                <span style="font-size: 11px;"><span style="color: red;">*</span>
                                Note: Always fill in the available course prices, as empty course prices will be consindered<span class="font-weight-bold"> NOT AVAILABLE FOR SALE</span>.
                            </span>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-12 mt-2">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <label class="pull-left" for="course_price">Course Price</label>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <input class="form-control" id="course_price" class="block mt-1 w-full" type="text" name="course_price" value="{{ $courses['editCourse']->course_price }}" oninput="this.value=this.value.replace(/[^\d]/g,'')" onchange="this.value=this.value.replace(/[^\d]/g,'')" />
                                        <span style="font-size: 11px;"><span style="color: red;">*</span> Note: This is the general course price to be displayed</span>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 d-flex mt-2">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="col-lg-12">
                                            <label for="course-type">Course Type</label>
                                            <span style="font-size: 11px;"><span style="color: red;">*</span>choose course type</span>
                                        </span>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="dropdown">
                                                <select class="form-control" name="course-type"  id="cars" required>
                                                    <option value="ebook">E-book</option>
                                                    <option value="video">Video</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <label class="pull-left" for="course_size_xl_qty ">Course duration</label>
                                        <select class="form-control" name="course-duration" id="color-one">
                                            <option value="" disabled selected>one week...</option>
                                            <option value="audio">two weeks</option>
                                            <option value="ebook">three weeks</option>
                                            <option value="video">one month</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="course-status">Course Status</label>
                            <div class="mt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="course_status" id="inlineRadio1" value="1" @if ($courses['editCourse']->course_status = 1)  checked  @endif>
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="course_status" id="inlineRadio2" value="0" @if ($courses['editCourse']->course_status = 0)  checked  @endif>
                                    <label class="form-check-label" for="inlineRadio2">Inactivate</label>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course-description">Course Description</label>
                            <textarea class="form-control"  placeholder="Course Description"  name="course_description" rows="10">{{ $courses['editCourse']->course_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="course-description">Course Scope</label>
                            <textarea class="form-control"  placeholder="Course Scope"  name="course_scope" rows="10">{{ $courses['editCourseAttributes']->course_scope }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success float-right mt-5">Submit</button>
                    </form>

                    <div class="row container my-3">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="{{ route('admin.dashboard') }}" type="button" class="btn btn-default float-left"> <i class="fa fa-angle-left"></i> Back</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

@section('scripts')

    <script type="text/javascript">
        $('.decimal').keypress(function(evt){
            return (/^[0-9]*\.?[0-9]*$/).test($(this).val()+evt.key);
        });

        //This post gets the sub categories of the selected category
            $("#courseAttr").on("change", "select.parent-category", function(){
                event.preventDefault();
                var course_cat = $('#course_cat').val();
                document.getElementById("subCatLoader").style.display = "block";

                $.ajax({
                url: '/admin/category/get/sub/categories',
                type: "POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    course_cat:course_cat,
                },
                success:function(data){
                    if(data.success){
                        var response = data.success;
                        var len = response.length;
                        console.log(data);

                        document.getElementById("subCatLoader").style.display = "none";
                        document.getElementById("subCat").options.length = 0;

                        for (let i = 0; i < len; i++) {
                            var x = document.getElementById("subCat");
                            var option = document.createElement("option");
                            option.text = response[i].subcategory_name;
                            option.value = response[i].id;
                             x.add(option);
                        }
                        $("#subCat").removeAttr("disabled");
                    }
                },
                error: function(response) {
                    document.getElementById("subCatLoader").style.display = "none";
                    alert("Ooooops something went wrong");
                }
                });
            });

    </script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
    CKEDITOR.replace('editor');
    </script>

    @stop
