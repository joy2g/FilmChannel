@if (Session::has('flash_success'))
    <script type="text/javascript">
        $(document).ready(function () {
            successMessage('Success!', "{{Session::get('flash_success')}}");
        });
    </script>
@elseif (Session::has('flash_error'))
    <script type="text/javascript">
        $(document).ready(function () {
            errorMesssage('Error!', "{{Session::get('flash_error')}}");
        });
    </script>
@endif
