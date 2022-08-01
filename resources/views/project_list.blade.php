    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div class="container-xxl flex-grow-1 container-p-y">
      <!-- Large Modal -->
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Create Task</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                 <form id="formAccountSettings" method="POST"action="{{ route('create_projects') }}" enctype="multipart/form-data">
                          @csrf
                <div class="modal-body">  
                          <h4 class="mb-0">Add project details</h4>
                           <h6 class="mb-0">You can change these details anytime in your project settings.</h6>
                         </hr>


                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                        id="preview-image"
                          src="{{ url('img/1.png') }}"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"

                        />
                        <div class="button-wrapper">
                          <label for="upload" class="me-2 mb-8" tabindex="0">
                            <span class="d-none d-sm-block">Project Icon</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="image"
                              class="account-file-input"
                              name="image"
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>




                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name*</label> 
                            <input
                              class="form-control"
                              type="text"
                              id="title"
                              name="title"
                               value=""
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Key*</label>
                            <input class="form-control" type="text" name="key" id="key" value="" />
                          </div>
                         


                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="category">Category</label>
                            <select id="category" name="category" class="select2 form-select">
                              <option value="0">Select</option>
                              <option value="1">Software</option>
                              <option value="2">Product</option>
                              <option value="3">Services</option>
                            </select>
                          </div>

                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="lead">Project lead</label>
                            <select id="lead" name="lead" class="select2 form-select">
                              <option value="0">Select</option>
                              <option value="1">ABC</option>
                              <option value="2">XYZ</option>
                            </select>
                          </div>

                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="default_assigned">Default assignee</label>
                            <select id="default_assigned" name="default_assigned" class="select2 form-select">
                              <option value="0">Unassigneed</option>
                              <option value="1">Project lead</option>
                            </select>
                          </div>
                            <div class="mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                              <label class="form-check-label" for="terms-conditions">
                                Connect repositories, documents, and more
                                <a href="javascript:void(0);">Sync your team's work from other tools with this project for better visibility, access, and automation.</a>
                              </label>
                            </div>
                          </div>

                         

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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



                          <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#largeModal"
                           >
                          Create Project
                        </button>



                    
              <div class="row">
                <div class="col-3 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2"> Total Project </h5>
                              </div>
                              <div class="mt-sm-auto">
                                <h3 class="mb-0">859</h3>
                              </div>
                            </div>
                            <div id="profileReportChartt">
                             <span class="avatar-initial rounded bg-label-primary"
                              ><i class="bx bx-mobile-alt"></i
                            ></span>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="col-3 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2"> Pending  </h5>
                              </div>
                              <div class="mt-sm-auto">
                                <h3 class="mb-0">113</h3>
                              </div>
                            </div>
                            <div id="profileReportChartt">
                               <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="col-3 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2"> Running </h5>
                              </div>
                              <div class="mt-sm-auto">
                                <h3 class="mb-0">609</h3>
                              </div>
                            </div>
                            <div id="profileReportChartt">
                              <span class="avatar-initial rounded bg-label-secondary"
                              ><i class="bx bx-football"></i
                            ></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="col-3 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2"> Completed </h5>
                              </div>
                              <div class="mt-sm-auto">
                                <h3 class="mb-0">250</h3>
                              </div>
                            </div>
                            <div id="profileReportChartt">
                             <span class="avatar-initial rounded bg-label-primary"
                              ><i class="bx bx-mobile-alt"></i
                            ></span>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>





                    



      <div class="col-xl-12">
                  <div class="nav-align-top">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link active"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-top-home"
                          aria-controls="navs-top-home"
                          aria-selected="true"
                        >
                          List
                        </button>
                      </li>
                      <li class="nav-item">
                        <button
                          type="button"
                          class="nav-link"
                          role="tab"
                          data-bs-toggle="tab"
                          data-bs-target="#navs-top-profile"
                          aria-controls="navs-top-profile"
                          aria-selected="false"
                        >
                          Add New
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                        
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="d-inline card-header">Projects List</h5>
                <!-- <div class="d-inline"> 
                     <form class="d-flex">
                        <div class="input-group">
                          <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                          <input type="text" class="form-control" placeholder="Search For..." />
                        </div>
                    </form>                  
                </div> -->
               


                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Title</th>
                        <th>key</th>
                        <th>Date</th>
                        <th>description</th>
                        <th>category</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($members as $member)
                      <tr>
                         <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs"
                              title="{{$member['title']}}"
                            >
                              <img src="{{ url('img/project_img/'.$member['icon_picture']) }}" alt="icon" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>

                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['title']}}</strong></td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i>{{$member['key']}}</td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i>{{$member['start']}}</td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i>{{$member['description']}}</td>
                      <td><i class="fab fa-angular fa-lg text-danger"></i>{{$member['category']}}</td>
                        <td><span class="badge bg-primary">{{$member['isactive']}}</span></td>
                        <td>
                          <div class="">
                          <a href="projects_edit/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-edit-alt"></span>
                          </a> 

                          <a href="projects_delete/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary delete-confirm"> <span class="tf-icons bx bx-trash me-1 text-danger"></span>
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
                      <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                         <div class="card-body">
                     
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
    <x-footer/> 


                    <script type="text/javascript">
                      $('#image').change(function()
                      {                             
                      let reader = new FileReader();
                      reader.onload = (e) => { 
                        $('#preview-image').attr('src', e.target.result); 
                      }
                      reader.readAsDataURL(this.files[0]);                     
                     });
                    </script>

                    <!-- Delete Confirmation -->
                    <script type="text/javascript">
                      $('.delete-confirm').on('click', function (event) {
                        event.preventDefault();
                        const url = $(this).attr('href');
                        swal({
                            title: 'Are you sure?',
                            text: 'This record and it`s details will be permanantly deleted!',
                            icon: 'warning',
                            buttons: ["Cancel", "Yes!"],
                        }).then(function(value) {
                            if (value) {
                                window.location.href = url;
                            }
                        });
});</script>
