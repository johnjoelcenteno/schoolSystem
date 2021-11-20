  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <div class="page-content">
          <!-- BEGIN PAGE HEAD -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1> Advisory class: <b><?= $SectionName ?></b> </h1>
              </div>
              <!-- END PAGE TITLE -->
              <!-- BEGIN PAGE TOOLBAR -->
          </div>
          <!-- END PAGE HEAD -->

          <!-- CONTENT AND OTHER MUST HERE BELOW -->



          <div class="row">
              <div class="col-md-12">
                  <!-- BEGIN EXAMPLE TABLE PORTLET-->
                  <?php if ($AdvisoryIdentifier > 0) { ?>
                      <div class="" style="margin-bottom:5px">
                          <button type="button" class="btn btn-circle green-meadow" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"> Add student</i></button>
                      </div>
                  <?php } ?>
                  <div class="portlet box blue-hoki">
                      <div class="portlet-title">
                          <div class="caption">
                              <i class="fa fa-globe"></i>
                          </div>
                          <div class="tools">

                          </div>
                      </div>
                      <div class="portlet-body">
                          <?php if ($AdvisoryIdentifier == 0) { ?>
                              <center>
                                  <h1> You do not have any advisory class</h1>
                              </center>
                          <?php } else { ?>
                              <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                                  <thead>
                                      <tr>
                                          <th>
                                              #
                                          </th>
                                          <th>
                                              ID
                                          </th>
                                          <th>
                                              Fullname
                                          </th>
                                          <th>
                                              Contact Number
                                          </th>
                                          <th>
                                              Parent Name
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
                          <?php } ?>
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
                          <input type="text" id="createContactNumber" class="form-control" placeholder="Enter contact number here" maxlength="11" pattern="\d{11}">
                      </div>
                      <div class="form-group">
                          <label>Parent full name</label>
                          <input type="text" id="parentFullName" class="form-control" placeholder="Enter parent full name here">
                      </div>
                      <div class="form-group">
                          <label>Parent contact number</label>
                          <input type="text" id="parentContactNumber" class="form-control" placeholder="Enter parent contact number here" maxlength="11" pattern="\d{11}">
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
  <!-- Update MODAL -->
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
                          <input type="text" id="updateContactNumber" class="form-control" placeholder="Enter contact number here" maxlength="11" pattern="\d{11}">
                      </div>
                      <div class="form-group">
                          <label>Parent full name</label>
                          <input type="text" id="updateParentFullName" class="form-control" placeholder="Enter parent full name here">
                      </div>
                      <div class="form-group">
                          <label>Parent contact number</label>
                          <input type="text" id="updateParentContactNumber" class="form-control" placeholder="Enter parent contact number here" maxlength="11" pattern="\d{11}">
                      </div>
                      <div class="form-group">
                          <label>Update Students Section</label>
                          <select name="" id="UpdateSection" class="form-control">
                              <option value="">Select Section</option>
                              <?php foreach ($GetAllSection->result() as $row) {
                                    $sectionName = $row->section_name;
                                ?>

                                  <option value="<?= $row->id ?>"><?= $sectionName ?></option>
                              <?php } ?>
                          </select>
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
  <!-- update MODAL -->
  <script>
      $(document).ready(function() {
          function refresh() {
              $('tbody').load("<?= base_url() ?>Teacher/GetAllStudentForTableAdvisory");
          }
          refresh();

          // CREATE POST AJAX
          $('#createForm').submit(function(e) {
              e.preventDefault();

              $.post("<?= base_url() ?>Teacher/createStudent", {
                  firstname: $('#createFirstname').val(),
                  middlename: $('#createMiddlename').val(),
                  lastname: $('#createLastname').val(),
                  contact_number: $('#createContactNumber').val(),
                  parent_fullname: $('#parentFullName').val(),
                  parent_contact_number: $('#parentContactNumber').val(),
                  section_id: <?= $sectionId ?>,
              }, function(resp) {
                  console.clear();
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Student Information created successfully',
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

              $.post("<?= base_url() ?>Teacher/getStudentById", {
                  id: id
              }, function(resp) {
                  resp = JSON.parse(resp)[0];
                  $("#updateFirstname").val(resp.firstname);
                  $("#updateMiddlename").val(resp.middlename);
                  $("#updateLastname").val(resp.lastname);
                  $("#updateContactNumber").val(resp.contact_number);
                  $("#UpdateSelectParent").val(resp.parent_id);
                  $("#UpdateSection").val(resp.section_id);
                  $("#updateParentFullName").val(resp.parent_fullname);
                  $("#updateParentContactNumber").val(resp.parent_contact_number);

                  $('#updateSubmitButton').val(resp.id);

                  $("#updateModal").modal("show");
              });
          });




          // UPDATE POST AJAX
          $('#updateForm').submit(function(e) {
              e.preventDefault();

              $.post("<?= base_url() ?>Teacher/updateStudent", {
                  firstname: $('#updateFirstname').val(),
                  middlename: $('#updateMiddlename').val(),
                  lastname: $('#updateLastname').val(),
                  contact_number: $('#updateContactNumber').val(),
                  parent_fullname: $('#updateParentFullName').val(),
                  parent_contact_number: $('#updateParentContactNumber').val(),
                  section_id: $('#UpdateSection').val(),

                  id: $('#updateSubmitButton').val(),
              }, function(resp) {
                  console.log(resp);
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Subject updated successfully',
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
                      $.post("<?= base_url() ?>/Principal/deleteSubject", {
                          id: id
                      }, function() {
                          refresh();

                          Swal.fire(
                              'Deleted!',
                              'Subject has been deleted.',
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