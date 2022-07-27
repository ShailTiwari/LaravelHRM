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
                <h5 class="card-header">User List</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($members as $member)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$member['name']}}</strong></td>
                        <td>{{$member['email']}}</td>                        
                        <td><span class="badge bg-label-success me-1">Active</span></td>
                         <td>
                          <div class="">
                          <a href="profile/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-edit-alt"></span>
                          </a> 

                          <a href="delete/{{$member['id']}}" class="btn rounded-pill btn-icon btn-outline-primary"> <span class="tf-icons bx bx-trash me-1 text-danger"></span>
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
                        <p>
                          Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                          cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                          cheesecake fruitcake.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>








        
    <x-footer/>