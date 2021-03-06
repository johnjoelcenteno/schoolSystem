<?php
$ClassSectionId = $sectionId;
?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1> Grades Management</h1>
                <ul class="page-breadcrumb breadcrumb" style="color:black">
                    <li>
                        <span>Section: <b><?= $sectionName ?></b></span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Subject: <b><?= $subjectName ?></b></span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span> Year Level: <b><?= $gradeLevel ?></b> </span>
                    </li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"><span class="md-click-circle md-click-animate" style="height: 101px; width: 101px; top: -37.5px; left: 35.5px;"></span>
                        <span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?= base_url() ?>Attendance/recordAttendance?ClassSectionId=<?= $ClassSectionId ?>&ClassSubjectId=<?= $subjectId ?>&gradeLevel=<?= $gradeLevel ?>">
                                <i class="icon-check"></i>&nbsp; Record attendance
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Attendance/viewRecord?ClassSectionId=<?= $ClassSectionId ?>&ClassSubjectId=<?= $subjectId ?>&gradeLevel=<?= $gradeLevel ?>">
                                <i class="icon-eye"></i>&nbsp; View attendance
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Grades?subjectId=<?= $subjectId ?>&gradeLevel=<?= $gradeLevel ?>&sectionId=<?= $sectionId ?>">
                                <i class="fa fa-book"></i> Grade </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- END PAGE TITLE -->
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
                            Student Class List
                        </div>
                        <div class="tools">

                        </div>
                    </div>

                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>First Quarter</th>
                                    <th>Second Quarter</th>
                                    <th>Third Quarter</th>
                                    <th>Fourth Quarter</th>
                                    <th>Year</th>
                                    <th>Actions</th>
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
<!-- END FOOTER
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
<script src="<?= base_url() ?>assets/admin/pages/scripts/table-advanced.js"></script> -->

<!-- grades Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="exampleModalLabel">Manage student grade</h3>
                <h5 class="modal-title" style="font-weight: bold"><?= $subjectName ?></h5>
                <h6 class="modal-title" style="font-weight: bold"><?= date("Y") ?></h6>
            </div>
            <div class="modal-body">
                <form id="createForm">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label>First quarter</label>
                            <input type="number" class="form-control" id="firstQuarter" placeholder="first quarter grade">
                        </div>
                        <div class="col-md-3">
                            <label>Second quarter</label>
                            <input type="number" class="form-control" id="secondQuarter" placeholder="second quarter grade">
                        </div>
                        <div class="col-md-3">
                            <label>Third quarter</label>
                            <input type="number" class="form-control" id="thirdQuarter" placeholder="third quarter grade">
                        </div>
                        <div class="col-md-3">
                            <label>Fourth quarter</label>
                            <input type="number" class="form-control" id="fourthQuarter" placeholder="fourth quarter grade">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- grades Modal -->

<!-- Remarks modal -->
<div class="modal fade" id="remarksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="exampleModalLabel">STUDENT REMARKS</h3>
                <h5 class="modal-title" style="font-weight: bold"><?= $subjectName ?></h5>
                <h6 class="modal-title" style="font-weight: bold"><?= date("Y") ?></h6>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">Remark Type</label>
                    <select id="remarkSelect" class="form-control" required>
                        <option value="">Select type of remarks</option>
                        <option value="grades">Grades</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                <div class="form-group" id="divTextArea" style="display:none">
                    <textarea id="remarksTextArea" class="form-control" placeholder="Enter remarks here" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No remarks</button>
                <button type="button" class="btn btn-primary" id="submitRemarkBtn">Submit remarks</button>
            </div>

        </div>
    </div>
</div>
<!-- Remarks modal -->

<script>
    let selectedStudent = null;
    let studId = null;
    $(document).ready(function() {
        let gradeId = null; // pk of grades table

        function refresh() {
            $('tbody').load("<?= base_url() ?>Grades/getForTable?sectionId=<?= $sectionId ?>&subjectId=<?= $subjectId ?>&gradeLevel=<?= $gradeLevel ?>&year=<?= date("Y") ?>");
        }
        refresh();

        $(document).on("click", ".edit", function() {
            let studentId = $(this).val();

            selectedStudent = studentId;
            studId = studentId;
            $.get("<?= base_url() ?>Grades/getByStudentId", {
                subjectId: "<?= $subjectId ?>",
                gradeLevel: "<?= $gradeLevel ?>",
                sectionId: "<?= $sectionId ?>",
                studentId: studentId,
            }, function(resp) {
                resp = JSON.parse(resp)[0];

                if (resp != null) {
                    $("#firstQuarter").val(resp.first_quarter);
                    $("#secondQuarter").val(resp.second_quarter);
                    $("#thirdQuarter").val(resp.third_quarter);
                    $("#fourthQuarter").val(resp.fourth_quarter);

                    gradeId = resp.id;
                }

                $("#modal").modal('show');
            });
        });

        $("#createForm").submit(function(e) {
            e.preventDefault();

            let firstQuarter = $('#firstQuarter').val();
            let secondQuarter = $('#secondQuarter').val();
            let thirdQuarter = $('#thirdQuarter').val();
            let fourthQuarter = $('#fourthQuarter').val();

            $.post("<?= base_url() ?>Grades/createOrUpdate", {
                student_id: studId,
                subject_id: "<?= $subjectId ?>",
                section_id: "<?= $sectionId ?>",
                grade_level: "<?= $gradeLevel ?>",

                first_quarter: $('#firstQuarter').val(),
                second_quarter: $('#secondQuarter').val(),
                third_quarter: $('#thirdQuarter').val(),
                fourth_quarter: $('#fourthQuarter').val(),
            }, function() {

                $("#modal").modal("hide");

                refresh();

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Grade uploaded successfully',
                    showConfirmButton: false,
                    timer: 1500
                });

                determineIfStudentGradeCompleted(studId);
            });
        });
    });

    function determineIfStudentGradeCompleted(studId) {
        let studentGrades = [$('#firstQuarter').val(), $('#secondQuarter').val(), $('#thirdQuarter').val(), $('#fourthQuarter').val()];
        let hasIncompleteGrade = studentGrades.includes("0");

        if (hasIncompleteGrade == false) {
            postStudentMovingUp(studId);

            $('#remarksModal').modal("show");
        }
    }
</script>

<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        TableAdvanced.init();
    });
</script>

<!-- Grade Completion -->
<script>
    function postStudentMovingUp(studId) {
        $.post("<?= base_url() ?>Grades/movingUpPost", {
            student_id: studId,
            previous_section: <?= $sectionId ?>
        });
    }

    $('#remarkSelect').change(function() {
        let selectValue = $(this).val();
        selectValue == 'others' ? $('#divTextArea').slideDown() : $('#divTextArea').slideUp();
    });

    $('#submitRemarkBtn').click(function() {
        let remarks = $('#remarksTextArea').val();

        if ($('#remarkSelect').val() == 'grades') remarks = '6969';

        $.post("<?= base_url() ?>Grades/submitRemarks", {
            student_id: studId,
            subject_id: "<?= $subjectId ?>",
            teacher_id: "<?= $teacherId ?>",
            remarks: remarks
        }, function() {
            $('#remarksModal').modal('hide');

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Remarks created',
                showConfirmButton: false,
                timer: 1500
            });
        });
    });
</script>
</body>
<!-- END BODY -->

</html>