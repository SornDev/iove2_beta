    <link rel="icon" href="<?php echo base_url('images/in-out.ico') ?>"/> <link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet"> <link href="<?php echo base_url('css/font-awesome.css') ?>" rel="stylesheet"> <link href="<?php echo base_url('css/bootstrap-datepicker.min.css') ?>" rel="stylesheet"> <div class="container"> <br /> <div class="row"> <div class='col-sm-3'> <div class="form-group"> <div id="filterDate2"> <!-- Datepicker as text field --> <div class="input-group date" data-date-format="dd.mm.yyyy"> <input  type="text" class="form-control" placeholder="dd.mm.yyyy"> <div class="input-group-addon" > <span class="glyphicon glyphicon-th"></span> </div> </div> </div> </div> </div> </div> </div> <script src='js/jquery.min.js'></script> <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script> <script src="<?php echo base_url('js/bootstrap-datepicker.min.js') ?>"></script> <script > $('.input-group.date').datepicker({format: "mm-yyyy", startView: "months", minViewMode: "months"}); </script>