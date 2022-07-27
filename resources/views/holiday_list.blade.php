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
                <h5 class="d-inline card-header">Holidays List</h5>
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
                        <th>Day</th>
                        <th>Date</th>
                        <th>Holiday</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($members as $member)
                      <tr>
                          <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{date('l', strtotime($member['start']));}}</strong></td>
                          <td><i class="fab fa-angular "></i> <strong>{{date('d-m-Y', strtotime($member['start']));}}</strong></td>
                          <td><i class="fab fa-angular "></i> <strong>{{$member['title']}}</strong></td>
                          <td>
                              <div class="demo-inline-spacing">
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