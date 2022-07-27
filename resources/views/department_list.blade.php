            <x-header/>
    <x-sidebar/>
    <div class="container-xxl flex-grow-1 container-p-y">
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
                <h5 class="d-inline card-header">Department List</h5>
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
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
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
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="{{ url('img/'.$member['profile_picture']) }}" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>

                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$member['name']}}</strong></td>
                        <td><span class="badge bg-primary">Active</span></td>
                        <td>
                          <div class="demo-inline-spacing">
                          <a href="department_edit/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-edit-alt"></span>
                          </a> 

                          <a href="department_delete/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-trash me-1 text-danger"></span>
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
                      <form id="formAccountSettings" method="POST"action="{{ route('department_add') }}" enctype="multipart/form-data">
                          @csrf


                        <div class="row">

                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="" />
                          </div>



                         
                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="department">Status</label>
                            <select id="status" name="status" class="select2 form-select">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                            </select>
                          </div>
                           

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
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