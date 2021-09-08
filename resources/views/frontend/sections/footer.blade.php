
<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Global Links Service 2021. All rights reserved.</span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>

	@routes

<!-- <script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script> -->
{{--	<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>--}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="{{asset('/')}}public/frontend/assets/js/script.js"></script>
<script src="{{asset('/')}}public/frontend/js/custom.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="{{url('public/js/toastr.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{url('public/css/toastr.min.css')}}">

<script type="text/javascript">


    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif


    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif


    @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif

</script>
    <script>
		$(document).ready(function () {
			//Initialize tooltips
			$('.nav-tabs > li a[title]').tooltip();
			//Wizard
			$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

				var $target = $(e.target);

				if ($target.parent().hasClass('disabled')) {
					return false;
				}
			});
			$(".next-step").click(function (e) {

				var $active = $('.wizard .nav-tabs li.active');
				$active.next().removeClass('disabled');
				nextTab($active);

			});
			$(".prev-step").click(function (e) {

				var $active = $('.wizard .nav-tabs li.active');
				prevTab($active);

			});
		});

		function nextTab(elem) {
			$(elem).next().find('a[data-toggle="tab"]').click();
		}
		function prevTab(elem) {
			$(elem).prev().find('a[data-toggle="tab"]').click();
		}
	</script>
