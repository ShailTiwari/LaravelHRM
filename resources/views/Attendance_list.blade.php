    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container-xxl flex-grow-1 container-p-y">

        <!-- Large Modal -->
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Add New</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                 <form id="formAccountSettings" method="POST"action="{{ route('create_attendance') }}" enctype="multipart/form-data">
                          @csrf
                      <div class="modal-body"> 
                         <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Date</label> 
                            <input
                              class="form-control"
                              type="date"
                              id="name"
                              name="start"
                               value=""
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Start Time</label>
                            <input class="form-control" type="time" name="puncin" id="puncin" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">End Time</label>
                            <input class="form-control" type="time" name="puncout" id="puncout" value="" />
                          </div> 
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Remarks</label>
                            <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks" value="" />
                          </div>
                        </div>
                      </div>                 
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
                 </form>
              </div>
            </div>
          </div>





              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Timesheet {{ date('d-M-Y',strtotime($last_attendance[0]->start)) }}  </h5>
                        <small class="text-muted"></small>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                          <h2 class="mb-2">{{$last_attendance[0]->puncin}}</h2>
                          <span>Punch In at</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">                          
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <button class="punch_attendence btn btn-lg btn-outline-danger">In</button>
                          </div>

                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <button class="punchout_attendence btn btn-lg btn-outline-warning">Out</button>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <button data-bs-toggle="modal" data-bs-target="#largeModal" class="btn btn-lg btn-outline-success">Manual</button>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Break</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">{{$last_attendance[0]->break}} hrs</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Overtime</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">{{$last_attendance[0]->overtime}} hrs</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
                      </div>
                    </div>
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                          <div class="d-flex p-4 pt-3">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                            </div>
                            <div>
                              <small class="text-muted d-block">Total Balance</small>
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$459.10</h6>
                                <small class="text-success fw-semibold">
                                  <i class="bx bx-chevron-up"></i>
                                  42.9%
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id="incomeChart"></div>
                          <div class="d-flex justify-content-center pt-4 gap-2">
                            <div class="flex-shrink-0">
                              <div id="expensesOfWeek"></div>
                            </div>
                            <div>
                              <p class="mb-n1 mt-1">Expenses This Week</p>
                              <small class="text-muted">$39 less than last week</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Today Activity</h5>
                        <small class="text-muted"></small>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Punch In at</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <span class="text-muted"> 10.00 AM. </span>
                            </div>
                          </div>
                        </li>

                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Punch Out at</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <span class="text-muted"> 10.00 AM. </span>
                            </div>
                          </div>
                        </li>

                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Punch In at</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <span class="text-muted"> 10.00 AM. </span>
                            </div>
                          </div>
                        </li>

                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Punch Out at</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <span class="text-muted"> 10.00 AM. </span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>





                    



      <div class="col-xl-12">
         <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="d-inline card-header">Attendance List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Punch In</th>
                        <th>Punch Out</th>
                        <th>Production</th>
                        <th>Break</th>
                        <th>Overtime</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($members as $member)
                      <tr>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{ date('d-m-Y h:m:s',strtotime($member['start'])) }}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['puncin']}}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['puncout']}}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['work']}}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['break']}}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['overtime']}}</strong></td>
                      <td><span class="badge bg-label-warning">Pending</span></td>
                      <td>
                          <div class="">
                          <a href="employee_edit/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-edit-alt"></span>
                          </a> 

                          <a href="employee_delete/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-trash me-1 text-danger"></span>
                          </a>  
                          </div>
                      </td>
                      </tr>
                        @endforeach   
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
          <x-footer/>                  

          <script>
                $(function () {
                     // ON SELECTING ROW
                $(".punch_attendence").click(function () 
                {
                    var SITEURL = "{{ url('/') }}"; 
                    var token = $('meta[name="csrf-token"]').attr('content');
                    var type = '1';

                  $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: SITEURL + "/auto_attendance",
                            data: {
                               type: type,
                              _token: token
                            },
                            success: function(response) {
                                  console.log(response);
                                if (response.status == "success") 
                                {
                                  alert(response.msg);
                                } 
                                else 
                                {
                                  console.log(response.msg);
                                }
                                  }
                          });
                    });


                $(".punchout_attendence").click(function () 
                {
                    var SITEURL = "{{ url('/') }}"; 
                    var token = $('meta[name="csrf-token"]').attr('content');
                    var type = '2';

                  $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: SITEURL + "/auto_attendance",
                            data: {
                               type: type,
                              _token: token
                            },
                            success: function(response) {
                                  console.log(response);
                                if (response.status == "success") 
                                {
                                  alert(response.msg);
                                } 
                                else 
                                {
                                  console.log(response.msg);
                                }
                                  }
                          });
                    });

                  });
           </script>