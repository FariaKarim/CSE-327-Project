<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<!-- jQuery 2.1.4 -->
{{-- <script src="{{ asset('/plugins/jquery-2.2.3.min.js') }}"></script>
Bootstrap 3.3.2 JS
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script> --}}
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/MonthPicker.min.js') }}"></script>
<script src="{{ asset('/plugins/moment.min.js') }}"></script>
<script src="{{ asset('/plugins/fullcalendar.min.js') }}"></script>
<script src="{{ asset('/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/dataTables.bootstrap.min.js') }}"></script>


{{-- <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
</script> --}}
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>


