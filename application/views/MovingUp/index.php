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
<!-- view remaks of student modal -->

<script>
    $(document).ready(function() {
        function refreshTable() {
            $("#allSections").load("<?= base_url() ?>StudentsMovingUp/getAllSectionsForTable");
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
                        <td>
                            <a href="" target="blank">
                                <button class="btn green viewRemarks" value="${element.studentId}">View remarks</button>
                            </a>
                        </td>
                    </tr>
                `;
            });

            $('#viewModalTbody').html(htmlDataForViewModalTbody);
            $('#modalSectionName').text(`Section remarks of ${section_name}`);
            $('#viewModal').modal("show");
        });
    });
</script>