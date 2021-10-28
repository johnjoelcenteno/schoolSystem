  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <div class="page-content">
          <!-- BEGIN PAGE HEAD -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1> Record Attendance</b> <small><?= date("Y-m-d") ?></small> </h1>
              </div>
              <!-- END PAGE TITLE -->
              <!-- BEGIN PAGE TOOLBAR -->
          </div>
          <!-- END PAGE HEAD -->

          <!-- CONTENT AND OTHER MUST HERE BELOW -->



          <div class="row">
              <div class="col-md-12">
                  <!-- BEGIN EXAMPLE TABLE PORTLET-->
                  <div class="portlet box blue-hoki">
                      <div class="portlet-title">
                          <div class="caption">
                              <i class="fa fa-globe"></i>
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
                                          Fullname
                                      </th>
                                      <th>
                                          Date
                                      </th>
                                      <th>
                                          Time
                                      </th>
                                      <th>
                                          Absent students
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <!-- Ajax -->
                              </tbody>
                          </table>

                          <button class="btn btn-primary col-md-12" id="recordBtn">record</button>
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


  <!-- Scripts -->
  <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>

  <script src="<?= base_url() ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/select2/select2.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

  <script src="<?= base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/pages/scripts/table-advanced.js"></script>
  <!-- Scripts -->

  <!-- FILTER MODAL -->
  <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 align="center" class="modal-title" id="filterModalLabel">Filter by date</h2>
              </div>
              <div class="modal-body">
                  <form id="createForm">
                      <div class="form-group">
                          <label>Select Date</label>
                          <input type="date" class="form-control" id="selectedDate">
                      </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Filter</button>
              </div>
              </form>
          </div>
      </div>
  </div>
  <!-- FILTER MODAL -->

  <script>
      $(document).ready(function() {
          function refresh() {
              $('tbody').load("<?= base_url() ?>Attendance/GetAllStudentsBySectionIdAndSubjectId?ClassSectionId=<?= $ClassSectionId ?>&ClassSubjectId=<?= $ClassSubjectId ?>&gradeLevel=<?= $gradeLevel ?>");
          }
          refresh();


          $("#recordBtn").click(function() {
              let allStudents = [];

              // get all checked checkboxes
              $.each($("input[type='checkbox']:checked"), function(K, V) {
                  allStudents.push({
                      studentId: V.value,
                      status: "Absent"
                  });
              });

              $.each($("input[type='checkbox']:not(:checked)"), function(K, V) {
                  allStudents.push({
                      studentId: V.value,
                      status: "Present"
                  });
              });

              $.post("<?= base_url() ?>Attendance/recordAllStudentsInSection", {
                  allStudents: JSON.stringify(allStudents),
                  sectionId: "<?= $ClassSectionId ?>",
                  gradeLevel: "<?= $gradeLevel ?>",
                  subjectId: "<?= $ClassSubjectId ?>"
              }, function(resp) {
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Attendance record has been saved',
                      showConfirmButton: false,
                      timer: 1500
                  });

                  $("#recordBtn").prop("disabled", true);
                  $("#recordBtn").text("Already recorded");
              });

              setTimeout(function() {
                  if (allStudents.some(x => x.status == "Absent")) {
                      Swal.fire({
                          position: 'center',
                          icon: 'warning',
                          title: 'Absent students already been reported',
                          showConfirmButton: false,
                          timer: 3000
                      });
                  }
              }, 1500);


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