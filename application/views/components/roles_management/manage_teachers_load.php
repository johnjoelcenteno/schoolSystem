  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <div class="page-content">
          <!-- BEGIN PAGE HEAD -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1> Teachers Load Management</h1>
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
                      <button type="button" class="btn btn-circle green-meadow" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"> Assign Teacher Load</i></button>
                  </div>
                  <div class="portlet box blue-hoki">
                      <div class="portlet-title" id="TeachersName">
                          <div class="caption">
                              <i class="fa fa-globe"></i><?= $fullname ?>
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
                                          Subject Id
                                      </th>
                                      <th>
                                          Section
                                      </th>
                                      <th>
                                          Schedule
                                      </th>
                                      <th>
                                          Actions
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
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/clockface/js/clockface.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
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
                  <h2 align="center" class="modal-title" id="createModalLabel">Assign Load</h2>
              </div>
              <div class="modal-body">
                  <form id="createForm">

                      <div class="form-group">
                          <label>Select Subject</label>
                          <select name="" id="selectSubject" class="form-control">
                              <option value="">Select Subject</option>
                              <?php foreach ($allSubject->result() as $row) {
                                    $subjectName = $row->subject_name;

                                ?>

                                  <option value="<?= $row->id ?>"><?= $subjectName ?></option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Select section</label>
                          <select name="" id="selectSection" class="form-control">
                              <option value="">select section</option>
                              <?php foreach ($allSection->result() as $row) { ?>

                                  <option value="<?= $row->id ?>"><?= $row->section_name ?></option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Schedule</label>
                          <input type="text" id="schedulePick" class="form-control" placeholder="Enter Schedule Here">
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Assign</button>
              </div>
              </form>
          </div>
      </div>
  </div>
  <!-- CREATE MODAL -->

  <!-- CREATE MODAL -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 align="center" class="modal-title" id="createModalLabel">Update Teacher Load</h2>
              </div>
              <div class="modal-body">
                  <form id="updateForm">
                      <div class="form-group">
                          <label>Select Subject</label>
                          <select name="" id="selectSubjectUpdate" class="form-control">
                              <option value="">Select Subject</option>
                              <?php foreach ($allSubject->result() as $row) {
                                    $subjectName = $row->subject_name;

                                ?>

                                  <option value="<?= $row->id ?>"><?= $subjectName ?></option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Select section</label>
                          <select name="" id="selectSectionUpdate" class="form-control">
                              <option value="">select section</option>
                              <?php foreach ($allSection->result() as $row) { ?>

                                  <option value="<?= $row->id ?>"><?= $row->section_name ?></option>
                              <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Schedule</label>
                          <input type="text" id="schedulePickUpdate" class="form-control" placeholder="Enter Schedule Here">
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
  <!-- CREATE MODAL -->

  <script>
      $(document).ready(function() {
          function refresh() {
              $('tbody').load("<?= base_url() ?>Principal/getAllLoadByTeacherIdForTable?teacherId=<?= $teacherId ?>");
          }
          refresh();
          // CREATE POST AJAX
          $('#createForm').submit(function(e) {
              e.preventDefault();
              $.post("<?= base_url() ?>/Principal/createTeacherLoad?teacherId=<?= $teacherId ?>", {
                  subject_id: $('#selectSubject').val(),
                  section_id: $('#selectSection').val(),
                  schedule: $('#schedulePick').val()
              }, function(resp) {
                  console.clear();
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Teacher create successfully',
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
              $.post("<?= base_url() ?>/Principal/getTeacherLoadById?teacherId=<?= $teacherId ?>", {
                  id: id
              }, function(resp) {
                  resp = JSON.parse(resp)[0];

                  $("#selectSubjectUpdate").val(resp.subject_id);
                  $("#selectSectionUpdate").val(resp.section_id);
                  $("#schedulePickUpdate").val(resp.schedule);


                  $('#updateSubmitButton').val(resp.id);
                  $("#updateModal").modal("show");
              });
          });

          // UPDATE POST AJAX
          $('#updateForm').submit(function(e) {
              e.preventDefault();
              $.post("<?= base_url() ?>/Principal/updateTeacherLoad", {
                  subject_id: $('#selectSubjectUpdate').val(),
                  section_id: $('#selectSectionUpdate').val(),
                  schedule: $('#schedulePickUpdate').val(),
                  id: $('#updateSubmitButton').val(),
              }, function(resp) {
                  console.clear();
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Teacher load updated successfully',
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
                      $.post("<?= base_url() ?>/Principal/deleteTeacherLoad", {
                          id: id
                      }, function() {
                          refresh();

                          Swal.fire(
                              'Deleted!',
                              'Teacher load has been deleted.',
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
          ComponentsPickers.init();

      });
  </script>
  </body>
  <!-- END BODY -->

  </html>