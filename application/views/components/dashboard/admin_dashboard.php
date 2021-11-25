  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
      <div class="page-content">
          <!-- BEGIN PAGE HEAD -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1>Dashboard <small>statistics & reports</small></h1>
              </div>
              <!-- END PAGE TITLE -->
              <!-- BEGIN PAGE TOOLBAR -->
          </div>
          <!-- END PAGE HEAD -->

          <!-- CONTENT AND OTHER MUST HERE BELOW -->
          <div class="row margin-top-10">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="dashboard-stat2">
                      <div class="display">
                          <div class="number">
                              <h3 class="font-green-sharp"><?= $subjectCount ?><small class="font-green-sharp"></small></h3>
                              <small>TOTAL SUBJECTS AVAILABLE</small>
                          </div>
                          <div class="icon">
                              <i class="icon-book-open"></i>
                          </div>
                      </div>
                      <div class="progress-info">
                          <div class="progress">
                              <span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
                              </span>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="dashboard-stat2">
                      <div class="display">
                          <div class="number">
                              <h3 class="font-red-haze"><?= $teacherCount ?></h3>
                              <small>TEACHERS COUNT</small>
                          </div>
                          <div class="icon">
                              <i class="icon-plus"></i>
                          </div>
                      </div>
                      <div class="progress-info">
                          <div class="progress">
                              <span style="width: 100%;" class="progress-bar progress-bar-success red-haze">
                              </span>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="dashboard-stat2">
                      <div class="display">
                          <div class="number">
                              <h3 class="font-blue-sharp"><?= $sectionCount ?></h3>
                              <small>SECTIONS</small>
                          </div>
                          <div class="icon">
                              <i class="icon-users"></i>
                          </div>
                      </div>
                      <div class="progress-info">
                          <div class="progress">
                              <span style="width: 100%;" class="progress-bar progress-bar-success blue-sharp">
                              </span>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="dashboard-stat2">
                      <div class="display">
                          <div class="number">
                              <h3 class="font-purple-soft"><?= $studentCount ?></h3>
                              <small>STUDENT COUNT</small>
                          </div>
                          <div class="icon">
                              <i class="icon-user"></i>
                          </div>
                      </div>
                      <div class="progress-info">
                          <div class="progress">
                              <span style="width: 100%;" class="progress-bar progress-bar-success purple-soft">
                              </span>
                          </div>

                      </div>
                  </div>
              </div>
          </div>

          <!-- Teachers dashboard -->

          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1>Teachers <small>statistics & reports</small></h1>
              </div>
              <!-- END PAGE TITLE -->
              <!-- BEGIN PAGE TOOLBAR -->
          </div>





          <div class="row">
              <div class="col-md-6 col-sm-12">
                  <!-- BEGIN PORTLET-->
                  <div class="portlet light ">
                      <div class="portlet-title">
                          <div class="caption caption-md">
                              <i class="icon-bar-chart theme-font-color hide"></i>
                              <span class="caption-subject theme-font-color bold uppercase">Teachers Schedule</span>
                              <span class="caption-helper hide">weekly stats...</span>
                          </div>

                      </div>
                      <div class="portlet-body">
                          <div class="table-scrollable table-scrollable-borderless">
                              <table class="table table-hover table-light">
                                  <thead>
                                      <tr class="uppercase">
                                          <th colspan="2">
                                              NAME
                                          </th>
                                          <th>
                                              STATUS
                                          </th>
                                          <th>
                                              SECTION
                                          </th>
                                          <th>
                                              START TIME
                                          </th>
                                          <th>
                                              END TIME
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="fit">
                                              1. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Part-time
                                          </td>
                                          <td>
                                              Masigasig
                                          </td>
                                          <td>
                                              8:30 PM
                                          </td>
                                          <td>
                                              9:30 PM
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              2. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Part-time
                                          </td>
                                          <td>
                                              Maibig
                                          </td>
                                          <td>
                                              1:30 PM
                                          </td>
                                          <td>
                                              2:30 PM
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              3. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Part-time
                                          </td>
                                          <td>
                                              Malaya
                                          </td>
                                          <td>
                                              3:30 PM </td>
                                          <td>
                                              4:30 PM
                                          </td>
                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <!-- END PORTLET-->
              </div>
              <div class="col-md-6 col-sm-12">
                  <!-- BEGIN PORTLET-->
                  <div class="portlet light ">
                      <div class="portlet-title">
                          <div class="caption caption-md">
                              <i class="icon-bar-chart theme-font-color hide"></i>
                              <span class="caption-subject theme-font-color bold uppercase">Teachers Sections

                              </span>
                              <span class="caption-helper hide">weekly stats...</span>
                          </div>

                      </div>
                      <div class="portlet-body">
                          <div class="table-scrollable table-scrollable-borderless">
                              <table class="table table-hover table-light">
                                  <thead>
                                      <tr class="uppercase">
                                          <th colspan="2">
                                              NAME
                                          </th>
                                          <th>
                                              AVAILABLE SECTION
                                          </th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="fit">
                                              1. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Masigasig
                                          </td>

                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              2. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Malaya
                                          </td>

                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              3. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Maibig
                                          </td>

                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <!-- END PORTLET-->
              </div>

          </div>

          <!-- Principles Dashboard -->
          <div class="page-head">
              <!-- BEGIN PAGE TITLE -->
              <div class="page-title">
                  <h1>Principle <small>Manage Section & Schedule</small></h1>
              </div>
              <!-- END PAGE TITLE -->
              <!-- BEGIN PAGE TOOLBAR -->
          </div>
          <div class="row">
              <div class="col-md-6 col-sm-12">
                  <!-- BEGIN PORTLET-->
                  <div class="portlet light ">
                      <div class="portlet-title">
                          <div class="actions">
                              <div class="btn-group">
                                  <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
                                      <span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                      <li>
                                          <a href="javascript:;">
                                              <i class="fa fa-edit"></i> Update </a>
                                      </li>
                                      <li>
                                          <a href="javascript:;">
                                              <i class="fa fa-times"></i> Delete </a>
                                      </li>
                                      <li>
                                          <a href="javascript:;">
                                              <i class="icon-plus"></i> Add </a>
                                      </li>
                                      <li class="divider">
                                      </li>

                                  </ul>
                              </div>
                          </div>
                          <div class="caption caption-md">
                              <i class="icon-bar-chart theme-font-color hide"></i>
                              <span class="caption-subject theme-font-color bold uppercase">Teachers Schedule</span>
                              <span class="caption-helper hide">weekly stats...</span>
                          </div>

                      </div>
                      <div class="portlet-body">
                          <div class="table-scrollable table-scrollable-borderless">
                              <table class="table table-hover table-light">
                                  <thead>
                                      <tr class="uppercase">
                                          <th colspan="2">
                                              NAME
                                          </th>
                                          <th>
                                              STATUS
                                          </th>
                                          <th>
                                              SECTION
                                          </th>
                                          <th>
                                              START TIME
                                          </th>
                                          <th>
                                              END TIME
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="fit">
                                              1. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Part-time
                                          </td>
                                          <td>
                                              Masigasig
                                          </td>
                                          <td>
                                              8:30 PM
                                          </td>
                                          <td>
                                              9:30 PM
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              2. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Part-time
                                          </td>
                                          <td>
                                              Maibig
                                          </td>
                                          <td>
                                              1:30 PM
                                          </td>
                                          <td>
                                              2:30 PM
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              3. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Part-time
                                          </td>
                                          <td>
                                              Malaya
                                          </td>
                                          <td>
                                              3:30 PM </td>
                                          <td>
                                              4:30 PM
                                          </td>
                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <!-- END PORTLET-->
              </div>
              <div class="col-md-6 col-sm-12">
                  <!-- BEGIN PORTLET-->
                  <div class="portlet light ">
                      <div class="portlet-title">
                          <div class="actions">
                              <div class="btn-group">
                                  <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
                                      <span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                      <li>
                                          <a href="javascript:;">
                                              <i class="fa fa-edit"></i> Update </a>
                                      </li>
                                      <li>
                                          <a href="javascript:;">
                                              <i class="fa fa-times"></i> Delete </a>
                                      </li>
                                      <li>
                                          <a href="javascript:;">
                                              <i class="icon-plus"></i> Add </a>
                                      </li>
                                      <li class="divider">
                                      </li>

                                  </ul>
                              </div>
                          </div>
                          <div class="caption caption-md">
                              <i class="icon-bar-chart theme-font-color hide"></i>
                              <span class="caption-subject theme-font-color bold uppercase">Teachers Sections</span>
                              <span class="caption-helper hide">weekly stats...</span>
                          </div>

                      </div>
                      <div class="portlet-body">
                          <div class="table-scrollable table-scrollable-borderless">
                              <table class="table table-hover table-light">
                                  <thead>
                                      <tr class="uppercase">
                                          <th colspan="2">
                                              NAME
                                          </th>
                                          <th>
                                              AVAILABLE SECTION
                                          </th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="fit">
                                              1. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Masigasig
                                          </td>

                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              2. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Malaya
                                          </td>

                                      </tr>
                                      <tr>
                                          <td class="fit">
                                              3. </td>
                                          <td>
                                              Ingin Acebes
                                          </td>
                                          <td>
                                              Maibig
                                          </td>

                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <!-- END PORTLET-->
              </div>

          </div>



      </div>
  </div>
  <!-- END CONTENT -->