<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head>
	<meta charset="utf-8" />
	<title>JordCorp | @yield('title')</title>
	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{ asset('assets/css/stylec619.css?v=1.0') }}"" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->

	<link href="{{ asset('assets/api/pace/pace-theme-flat-top.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/api/mcustomscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/api/datatable/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- add category --}}
    <link href="{{ asset('assets/api/multiple-select/multiple-select.min.css') }}" rel="stylesheet">

    {{-- add product --}}
    <link href="{{ asset('cdn.jsdelivr.net/npm/select2%404.1.0-beta.1/dist/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('unpkg.com/multiple-select%401.5.2/dist/multiple-select.min.css') }}" rel="stylesheet">


	<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.html') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">

    @include('layout.header.index')

    @include('layout.menu.index')
    @yield('container')

    @yield('containerAdmin')


    @include('layout.footer.index')


</body>
<!--end::Body-->

<script src="{{ asset('assets/js/plugin.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/script-slick.js') }}"></script>

<script src="{{ asset('assets/js/script.bundle.js') }}"></script>
<script src="{{ asset('assets/api/jqueryvalidate/jquery.validate.min.j') }}"></script>
<script src="{{ asset('assets/api/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/api/apexcharts/scriptcharts.js') }}"></script>
<script src="{{ asset('assets/api/pace/pace.js') }}"></script>
<script src="{{ asset('assets/api/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/api/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/api/datatable/jquery.dataTables.min.js') }}"></script>

{{-- add category --}}
<script src="{{ asset('assets/api/multiple-select/multiple-select.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert1.js') }}"></script>

{{-- add product --}}
<script src="{{ asset('assets/api/editor/classic.ckeditor.js') }}"></script>
<script src="{{ asset('assets/api/editor/inline.ckeditor.js') }}"></script>
<script src="{{ asset('assets/api/select2/select2.min.js') }}"></script>
<script src="{{ asset('unpkg.com/multiple-select%401.5.2/dist/multiple-select.min.js') }}"></script>



<script>

    jQuery('.addproduct-js').slick('refresh');
        jQuery(document).ready(function() {
        jQuery('.js-Select').select2();
    });
    jQuery('.addproduct-js').slick('refresh');
        jQuery(document).ready(function() {
        jQuery('.js-example-basic-single').select2();

    });
    jQuery(document).ready(function() {
        jQuery('.js-example-basic-multiple').select2();
    });
    jQuery(document).ready(function() {
        jQuery('.js-size-multiple').select2();
    });

ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
            console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );


jQuery(document).ready( function () {
    jQuery('#myTable').DataTable();
} );

jQuery(function() {
        jQuery('.single-select').multipleSelect({
      filter: true,
      filterAcceptOnEnter: true
    })
  })
</script>

<script>
    var options = {
  debug: 'info',
  modules: {
    toolbar: '#toolbar'
  },
  placeholder: 'Compose an epic...',
  readOnly: true,
  theme: 'snow'
};
var editor = new Quill('#editor', options);


jQuery(document).ready( function () {
    jQuery('#myTable').DataTable();
} );
</script>


{{-- category --}}
<script>
	jQuery(function() {
        jQuery('.english-select').multipleSelect({
      filter: true,
      filterAcceptOnEnter: true
    })
  });
  jQuery(function() {
        jQuery('.arabic-select').multipleSelect({
      filter: true,
      filterAcceptOnEnter: true
    })
  });
jQuery(document).ready( function () {
	jQuery('#productUnitTable').dataTable( {
    "pagingType": "simple_numbers",

    "columnDefs": [ {
      "targets"  : 'no-sort',
      "orderable": false,
    }]
});
});

// product
jQuery(document).ready( function () {
	jQuery('#productTable').dataTable( {
    "pagingType": "simple_numbers",

    "columnDefs": [ {
      "targets"  : 'no-sort',
      "orderable": false,
    }]
});
});

</script>


</html>
