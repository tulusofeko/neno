$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker({
      locale: {
        format: 'DD-MM-YYYY',
        separator: ' s.d. ',
      }
    }),
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker2').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

     $('#datepicker3').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker4').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker5').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker6').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker7').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker8').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker9').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    $('#datepicker10').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      format: 'HH:mm',
      use24hours: true,
      showInputs: true,
      showMeridian: false
    })
  })