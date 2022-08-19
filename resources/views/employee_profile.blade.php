    <x-header  title={{$page_name}}/>
    <x-sidebar/>

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
                    <h5 class="card-header">Employee Details</h5>
                    <!-- Account -->

                   
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST"action="{{ route('update_employee_profile') }}" enctype="multipart/form-data">
                          @csrf

                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                        id="preview-image"
                          src="{{ url('images/faces/profile/'.$member['profile_picture']) }}"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"

                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="image"
                              class="account-file-input"
                              name="image"
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>


                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label> 
                            <input class="form-control" type="hidden" id="id" name="id" value="{{$member['id']}}" />
                            <input class="form-control" type="text" id="name" name="name" value="{{$member['name']}}"  autofocus/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" value="{{$member['lastname']}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{$member['email']}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Organization</label>
                            <input class="form-control" type="text" id="company" name="company" value="{{$member['company']}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                            <input class="form-control" type="text" id="phone_no" name="phone_no" value="{{$member['phone_no']}}" />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"  value="{{$member['address']}}" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="salary" class="form-label">Salary</label>
                            <input  type="text" class="form-control" id="salary" name="salary"  maxlength="10"  value="{{$member['salary']}}" 
                            />
                          </div>
                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="department">Department</label>
                            <select id="department" name="department" class="select2 form-select">
                                 @foreach($departments as $department)
                                   <option value="{{$department->id}}" @if($department->id == $member['department']) selected @endif>{{$department->name}}</option>                          
                                 @endforeach
                            </select>
                          </div>
                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="department">Post</label>
                            <select id="post" name="post" class="select2 form-select"> 
                              @foreach($posts as $post)
                                   <option value="{{$post->id}}" @if($post->id == $member['post']) selected @endif>{{$post->name}}</option>
                                 @endforeach
                            </select>
                          </div>

                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
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