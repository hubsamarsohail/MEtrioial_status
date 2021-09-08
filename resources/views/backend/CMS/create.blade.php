@extends('backend.master')
@section('title') CMS | Create@endsection
@section('page_css_js')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script src="{{ asset('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        // $(function () {
        //     //Initialize Select2 Elements
        //     $('.select2').select2()
        //
        //     //Initialize Select2 Elements
        //     $('.select2bs4').select2({
        //         theme: 'bootstrap4'
        //     })
        // })
    </script>
    <!-- jquery-validation -->
    <script src="{{ asset('public/backend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#quickForm').validate({
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>CMS Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('aCMSV')}}">CMS</a></li>
                            <li class="breadcrumb-item active">Create CMS</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add CMS <small>Detail</small></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="POST" action="{{route('aCMSC')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="site-title">Site Title:*</label>
                                        <input type="text" name="site_title" class="form-control" id="site-title"
                                               autocomplete="off"
                                               placeholder="Site Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Logo:*</label>
                                        <input type="file" name="file" class="form-control" id="img-logo"
                                               autocomplete="off" onchange="encodeBase64(this)"
                                               placeholder="Logo" required>
                                        <input type="hidden" name="logo" value="" id="logo" />
                                    </div>
                                    <div class="form-group">
                                        <label for="meta-title">Meta Title:</label>
                                        <input type="text" name="meta_title" class="form-control" id="meta-title"
                                               autocomplete="off"
                                               placeholder="Meta Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta-description">Meta Description:</label>
                                        <input type="text" name="meta_description" class="form-control" id="meta-description"
                                               autocomplete="off"
                                               placeholder="Meta Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="fb-url">FaceBook Url:</label>
                                        <input type="text" name="fb_url" class="form-control" id="fb-url"
                                               autocomplete="off"
                                               placeholder="FaceBook Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="tw-url">Twitter Url:</label>
                                        <input type="text" name="tw_url" class="form-control" id="tw-url"
                                               autocomplete="off"
                                               placeholder="Twitter Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="ln-url">LinkedIn Url:</label>
                                        <input type="text" name="ln_url" class="form-control" id="ln-url"
                                               autocomplete="off"
                                               placeholder="LinkedIn Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="yt-url">Youtube Url:</label>
                                        <input type="text" name="yt_url" class="form-control" id="yt-url"
                                               autocomplete="off"
                                               placeholder="Youtube Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="inst-url">Instagram Url:</label>
                                        <input type="text" name="inst_url" class="form-control" id="inst-url"
                                               autocomplete="off"
                                               placeholder="Instagram Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="video-url">Video Url:</label>
                                        <input type="text" name="video_url" class="form-control" id="video-url"
                                               autocomplete="off"
                                               placeholder="Video Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="cntct-url">Contact Url:</label>
                                        <input type="text" name="cntct_url" class="form-control" id="cntct-url"
                                               autocomplete="off"
                                               placeholder="Contact Url">
                                    </div>
                                    <div class="form-group">
                                        <label for="cntct-email">Contact Email:</label>
                                        <input type="text" name="cntct_email" class="form-control" id="cntct-email"
                                               autocomplete="off"
                                               placeholder="Contact Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="cntct-address">Contact Address:</label>
                                        <input type="text" name="cntct_address" class="form-control" id="cntct-address"
                                               autocomplete="off"
                                               placeholder="Contact Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="cntct-number">Contact Number:</label>
                                        <input type="text" name="cntct_number" class="form-control" id="cntct-number"
                                               autocomplete="off"
                                               placeholder="Contact Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Image Sliders:*</label>
                                        <input type="file" name="file[]" class="form-control" id="filesID"
                                               autocomplete="off" multiple="multiple" onchange="encodeBase64multi(this)"
                                               placeholder="Logo" accept="image/*">
                                    </div>
                                    <div class="form-group" id="slider_title">
                                        <label>Image Slider Titles:*</label>
{{--                                        <input type="text" name="titles[]" class="form-control" id="filesID"--}}
{{--                                               autocomplete="off" multiple="multiple" onchange="encodeBase64multi(this)"--}}
{{--                                               placeholder="Image Slider Titles">--}}
                                    </div>
                                    <div class="form-group" id="slider_description">
                                        <label>Image Slider Titles:*</label>
                                        {{--                                        <input type="text" name="titles[]" class="form-control" id="filesID"--}}
                                        {{--                                               autocomplete="off" multiple="multiple" onchange="encodeBase64multi(this)"--}}
                                        {{--                                               placeholder="Image Slider Titles">--}}
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<script>
    //    Base 64 image convert
    function encodeBase64(element) {
        let file = element.files[0];
        let reader = new FileReader();
        reader.onloadend = function() {
            $('#logo').val(reader.result)
            // console.log('RESULT', reader.result)
        }

        reader.readAsDataURL(file);
    }

    function encodeBase64multi(element) {
        $('#filesID').find('.img_file').remove();
        $('#slider_title').find('.slider_title').remove();
        $('#slider_description').find('.slider_description').remove();
        for(let i=0; i<= element.files.length; i++){
            let file = element.files[i];
            let reader = new FileReader();
            reader.onloadend = function() {
                var str = '<input type="hidden" class="img_file" name="slider_images[]" value="'+reader.result+'" />';
                $('#filesID').append(str);
                var textfield = '<input type="text" class="form-control slider_title" name="slider_titles[]" value="" />'
                $('#slider_title').append(textfield);
                var textarea = '<input type="text" class="form-control slider_description" name="slider_descriptions[]" value="" />'
                $('#slider_description').append(textarea);
            }

            reader.readAsDataURL(file);
        }
    }

</script>
