<div class="portlet box blue-hoki">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Manage teachers
        </div>
        <div class="tools">

        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" style="text-align: center;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Section</th>
                    <th>Actions </th>
                </tr>
            </thead>
            <tbody id="allSections">

            </tbody>
        </table>
    </div>
</div>

<!-- view students modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalSectionName" align="center"></h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="viewModalTbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- view students modal -->

<!-- view remaks of student modal -->
<div class="modal fade" id="studentRemarksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="studentRemarksModalTitle"></h3>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>Teacher</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="studentRemarksTbody">
                        </tbody>
                    </table>
                </div>
                <div align="center">
                    <button type="button" id="backToSectionBtn" class="btn blue" style="width: 80%">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- view remaks of student modal -->

<script>
    $(document).ready(function() {
        let _studentId;
        let _sectionId;

        function refreshTable() {
            $("#allSections").load("<?= base_url() ?>StudentsMovingUp/getAllSectionsForTable");
        }

        function getRemarksByStudentId(studentId) {
            $.post("<?= base_url() ?>StudentsMovingUp/getRemarksByStudentIdReturnTable", {
                student_id: studentId
            }, function(resp) {
                resp = JSON.parse(resp);

                $('#studentRemarksModalTitle').text(resp.studentFullname);
                $('#studentRemarksTbody').html(resp.htmlTbodyData);
            });
        }
        refreshTable();

        $(document).on('click', '.view', function() {
            let buttonValue = JSON.parse($(this).val());
            let section_id = buttonValue.id;
            let section_name = buttonValue.section_name;
            let students_with_remarks = JSON.parse(buttonValue.students_with_remarks);

            let counter = 0;
            let htmlDataForViewModalTbody = "";
            students_with_remarks.forEach(element => {
                counter++;

                htmlDataForViewModalTbody += `
                    <tr>
                        <td>${counter}</td>
                        <td>${element.studentFullName}</td>
                        <td><button class="btn green viewRemarks" value="${element.studentId}">View remarks</button></td>
                    </tr>
                `;
            });

            $('#viewModalTbody').html(htmlDataForViewModalTbody);
            $('#modalSectionName').text(`Section remarks of ${section_name}`);
            $('#viewModal').modal("show");
        });

        $(document).on('click', '.viewRemarks', function() {
            let studentId = $(this).val();
            _studentId = studentId;

            getRemarksByStudentId(_studentId);

            $('#viewModal').modal('hide');
            $('#studentRemarksModal').modal('show');
        });

        $('#backToSectionBtn').click(function() {
            $('#studentRemarksModal').modal('hide');
            $('#viewModal').modal('show');
        });

        $(document).on("click", ".resolve", function() {
            let remarkId = $(this).val();

            $.post("<?= base_url() ?>StudentsMovingUp/resolveRemarks", {
                remark_id: remarkId,
                student_id: _studentId
            }, function(resp) {
                resp = JSON.parse(resp);
                let rematiningRemarks = resp.remaining_remarks;
                let remainingStudentsWithRemarks = resp.setion_remaning_students_with_remarks.status;
                _sectionId = resp.section_id;

                let sectionRemarks = 0;
                if (rematiningRemarks == 0) {
                    $('#studentRemarksModal').modal('hide');
                    $('#viewModal').modal('show');

                    sectionRemarks += 1;
                }

                if (remainingStudentsWithRemarks == false) {
                    $('#viewModal').modal('hide');
                    refreshTable();

                    sectionRemarks += 1;
                }

                if (sectionRemarks == 2) Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Section has no remarks!',
                    showConfirmButton: false,
                    timer: 1500
                });
            });

            getRemarksByStudentId(_studentId); // refresh remarks table
        });

        $(document).on("click", ".approve", function() {
            let buttonValue = $(this).val();
            buttonValue = JSON.parse(buttonValue);

            let sectionId = buttonValue.id;
            let sectionName = buttonValue.section_name;

            $.post("<?= base_url() ?>StudentsMovingUp/clearSection", {
                section_id: sectionId
            }, function() {

                refreshTable();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: `${sectionName}'s section is all moving up!`,
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        });
    });
</script>