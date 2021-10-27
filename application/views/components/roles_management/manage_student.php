  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <div class="page-content">
          <!-- BEGIN PAGE HEAD -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1> Student Management</h1>
              </div>
              <!-- END PAGE TITLE -->
              <!-- BEGIN PAGE TOOLBAR -->
          </div>
          <!-- END PAGE HEAD -->

          <!-- CONTENT AND OTHER MUST HERE BELOW -->



          <div class="row">
              <div class="col-md-12">
                  <!-- BEGIN EXAMPLE TABLE PORTLET-->
                  <div class="" style="margin-bottom:5px">
                      <button type="button" class="btn btn-circle green-meadow"><i class="fa fa-plus"> Add Student Record</i></button>
                  </div>
                  <div class="portlet box blue-hoki">
                      <div class="portlet-title">
                          <div class="caption">
                              <i class="fa fa-globe"></i>Student Datatable
                          </div>
                          <div class="tools">

                          </div>
                      </div>
                      <div class="portlet-body">
                          <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                              <thead>
                                  <tr>
                                      <th>
                                          #
                                      </th>
                                      <th>
                                          Firstname
                                      </th>
                                      <th>
                                          Middlename </th>
                                      <th>
                                          Lastname
                                      </th>
                                      <th>
                                          Contact Number
                                      </th>
                                      <th>
                                          Actions
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>
                                          1
                                      </td>
                                      <td>
                                          John
                                      </td>
                                      <td>
                                          H </td>
                                      <td>
                                          Ramirez </td>
                                      <td>
                                          09289991234
                                      </td>
                                      <td>
                                          <button type="button" class="btn yellow"><i class="fa fa-edit"></i></button>
                                          <button type="button" class="btn red"><i class="fa fa-times"></i></button>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          1
                                      </td>
                                      <td>
                                          Joel
                                      </td>
                                      <td>
                                          D </td>
                                      <td>
                                          Centeno </td>
                                      <td>
                                          09289991232
                                      </td>
                                      <td>
                                          <button type="button" class="btn yellow"><i class="fa fa-edit"></i></button>
                                          <button type="button" class="btn red"><i class="fa fa-times"></i></button>
                                      </td>
                                  </tr>


                              </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- END EXAMPLE TABLE PORTLET-->

              </div>

          </div>
      </div>
      <!-- END CONTENT -->
      <!-- BEGIN PAGE CONTENT-->
      <!-- END PAGE CONTENT-->
  </div>
  </div>
  <!-- END CONTENT -->
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->
  <div class="page-footer">
      <div class="page-footer-inner">
      </div>
      <div class="scroll-to-top">
          <i class="icon-arrow-up"></i>
      </div>
  </div>
  <!-- END FOOTER -->
  <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
  <!-- BEGIN CORE PLUGINS -->
  <!--[if lt IE 9]>
<script src="<?= base_url() ?>assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
  <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
  <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src="<?= base_url() ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/select2/select2.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="<?= base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/pages/scripts/table-advanced.js"></script>
  <script>
      jQuery(document).ready(function() {
          Metronic.init(); // init metronic core components
          Layout.init(); // init current layout
          Demo.init(); // init demo features
          TableAdvanced.init();
      });
  </script>
  </body>
  <!-- END BODY -->

  </html>