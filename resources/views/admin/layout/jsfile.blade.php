
<script src="{{asset('admin/js/jquery.js')}}"></script>

<script src="{{asset('admin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>

<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('admin/js/owl.carousel.js')}}" ></script>
<script src="{{asset('admin/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('admin/js/respond.min.js')}}" ></script>

<!--right slidebar-->
<script src="{{asset('admin/js/slidebars.min.js')}}"></script>
{{--toaster js--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts5e1f.js')}}?v=2"></script>

<!--script for this page-->
<script src="{{asset('admin/js/sparkline-chart.js')}}"></script>
<script src="{{asset('admin/js/easy-pie-chart.js')}}"></script>
<script src="{{asset('admin/js/count.js')}}"></script>

<script type="text/javascript" language="javascript" src="{{asset('admin/assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/data-tables/DT_bootstrap.js')}}"></script>

<script src="{{asset('admin/js/dynamic_table_init.js')}}"></script>


<script type="text/javascript" src="{{asset('admin/assets/fuelux/js/spinner.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-daterangepicker/moment.min.js')}}'"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>

<!--select2-->
<script type="text/javascript" src="{{asset('admin/assets/select2/js/select2.min.js')}}"></script>

<!--summernote-->
<script src="{{asset('admin/assets/summernote/dist/summernote.min.js')}}"></script>

<!--right slidebar-->
<script src="{{asset('admin/js/slidebars.min.js')}}"></script>


<!--multiselect start + spinner + wysihtml5 scripts-->
<script src="{{asset('admin/js/advanced-form-components.js')}}"></script>
<!--pickers script-->
<script src="{{asset('admin/js/pickers/init-date-picker.js')}}"></script>
<script src="{{asset('admin/js/pickers/init-datetime-picker.js')}}"></script>
<script src="{{asset('admin/js/pickers/init-color-picker.js')}}"></script>

<!--bootstrap-switch-->
<script src="{{asset('admin/assets/bootstrap-switch/static/js/bootstrap-switch.js')}}"></script>

<!--bootstrap-switch-->
<script src="{{asset('admin/assets/switchery/switchery.js')}}"></script>

<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts.js')}}"></script>

<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });

</script>

<!--select2-->
<script type="text/javascript">

    $(document).ready(function () {
        $(".js-example-basic-single").select2();

        $(".js-example-basic-multiple").select2();
    });
</script>

<!--bootstrap swither-->
<script type="text/javascript">
    $(document).ready(function () {
        // Resets to the regular style
        $('#dimension-switch').bootstrapSwitch('setSizeClass', '');
        // Sets a mini switch
        $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-mini');
        // Sets a small switch
        $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-small');
        // Sets a large switch
        $('#dimension-switch').bootstrapSwitch('setSizeClass', 'switch-large');


        $('#change-color-switch').bootstrapSwitch('setOnClass', 'success');
        $('#change-color-switch').bootstrapSwitch('setOffClass', 'danger');
    });
</script>

<!-- swithery-->
<script type="text/javascript">
    $(document).ready(function () {
        //default
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);


        //small
        var elem = document.querySelector('.js-switch-small');
        var switchery = new Switchery(elem, { size: 'small' });

        //large
        var elem = document.querySelector('.js-switch-large');
        var switchery = new Switchery(elem, { size: 'large' });


        //blue color
        var elem = document.querySelector('.js-switch-blue');
        var switchery = new Switchery(elem, { color: '#7c8bc7', jackColor: '#9decff' });

        //green color
        var elem = document.querySelector('.js-switch-yellow');
        var switchery = new Switchery(elem, { color: '#FFA400', jackColor: '#ffffff' });

        //red color
        var elem = document.querySelector('.js-switch-red');
        var switchery = new Switchery(elem, { color: '#ff6c60', jackColor: '#ffffff' });


    });
</script>





<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });



</script>

</body>
</html>
