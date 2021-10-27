  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <div class="page-content">
          <!-- BEGIN PAGE HEAD -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1> Parents Management</b> </h1>
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
                      <button type="button" class="btn btn-circle green-meadow" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"> Add Parent</i></button>
                  </div>
                  <div class="portlet box blue-hoki">
                      <div class="portlet-title">
                          <div class="caption">
                              <i class="fa fa-globe"></i>
                          </div>
                          <div class="tools">

                          </div>
                      </div>
                      <div class="portlet-body">

                          <table class="table table-striped table-bordered table-hover" id="sample_1" style="text-align: center;">
                              <thead>
                                  <tr>
                                      <th>
                                          #
                                      </th>
                                      <th>
                                          Fullname
                                      </th>
                                      <th>
                                          Contact Number
                                      </th>
                                      <th>
                                          Section
                                      </th>
                                      <th>
                                          Year Level
                                      </th>
                                      <th>
                                          Action
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <!-- Ajax -->
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
  <!-- CREATE MODAL -->
  <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 align="center" class="modal-title" id="createModalLabel">Add student for this section</h2>
              </div>
              <div class="modal-body">
                  <form id="createForm">
                      <div class="form-group">
                          <label>First name</label>
                          <input type="text" id="createFirstname" class="form-control" placeholder="Enter first name here">
                      </div>

                      <div class="form-group">
                          <label>Middle name</label>
                          <input type="text" id="createMiddlename" class="form-control" placeholder="Enter middle name here">
                      </div>

                      <div class="form-group">
                          <label>Last name</label>
                          <input type="text" id="createLastname" class="form-control" placeholder="Enter last name here">
                      </div>

                      <div class="form-group">
                          <label>Contact number</label>
                          <input type="text" id="createContactNumber" class="form-control" placeholder="Enter contact number here">
                      </div>


              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Create</button>
              </div>
              </form>
          </div>
      </div>
  </div>
  <!-- CREATE MODAL -->

  <!-- Update Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 align="center" class="modal-title" id="createModalLabel">Update Teacher</h2>
              </div>
              <div class="modal-body">
                  <form id="updateForm">
                      <div class="form-group">
                          <label>First name</label>
                          <input type="text" id="updateFirstname" class="form-control" placeholder="Enter first name here">
                      </div>

                      <div class="form-group">
                          <label>Middle name</label>
                          <input type="text" id="updateMiddlename" class="form-control" placeholder="Enter middle name here">
                      </div>

                      <div class="form-group">
                          <label>Last name</label>
                          <input type="text" id="updateLastname" class="form-control" placeholder="Enter last name here">
                      </div>

                      <div class="form-group">
                          <label>Contact number</label>
                          <input type="text" id="updateContactNumber" class="form-control" placeholder="Enter contact number here">
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="updateSubmitButton">Update</button>
              </div>
              </form>
          </div>
      </div>
  </div>

  <script>
      $(document).ready(function() {
          function refresh() {
              $('tbody').load("<?= base_url() ?>Teacher/GetAllParentInfoForTable");
          }
          refresh();

          // CREATE POST AJAX
          $('#createForm').submit(function(e) {
              e.preventDefault();
              $.post("<?= base_url() ?>Teacher/createParent", {
                  firstname: $('#createFirstname').val(),
                  middlename: $('#createMiddlename').val(),
                  lastname: $('#createLastname').val(),
                  contact_number: $('#createContactNumber').val(),

              }, function(resp) {
                  console.clear();
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Parent information created successfully',
                      showConfirmButton: false,
                      timer: 1500
                  });
                  $('#createModal').modal('hide');
                  refresh();
              });
          });

          // UPDATE CLICK
          $(document).on("click", ".edit", function() {
              let id = $(this).val();
              console.clear();

              $.post("<?= base_url() ?>/Teacher/getParentById", {
                  id: id
              }, function(resp) {
                  resp = JSON.parse(resp)[0];

                  $("#updateFirstname").val(resp.firstname);
                  $("#updateMiddlename").val(resp.middlename);
                  $("#updateLastname").val(resp.lastname);
                  $("#updateContactNumber").val(resp.contact_number);


                  $('#updateSubmitButton').val(resp.id);

                  $("#updateModal").modal("show");
              });
          });

          // UPDATE POST AJAX
          $('#updateForm').submit(function(e) {
              e.preventDefault();
              $.post("<?= base_url() ?>/Teacher/UpdateParent", {
                  firstname: $('#updateFirstname').val(),
                  middlename: $('#updateMiddlename').val(),
                  lastname: $('#updateLastname').val(),
                  contact_number: $('#updateContactNumber').val(),

                  id: $('#updateSubmitButton').val(),
              }, function(resp) {
                  console.clear();
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Parent Information updated successfully',
                      showConfirmButton: false,
                      timer: 1500
                  });
                  $('#updateModal').modal('hide');
                  refresh();
              });
          });

          // DELETE 
          $(document).on("click", ".delete", function() {
              let id = $(this).val();

              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      $.post("<?= base_url() ?>/Teacher/DeleteParent", {
                          id: id
                      }, function() {
                          refresh();

                          Swal.fire(
                              'Deleted!',
                              'Parent Information has been deleted.',
                              'success'
                          );
                      });
                  }
              });
          });
      });
  </script>

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