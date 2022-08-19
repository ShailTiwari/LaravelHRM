    <x-header  title={{$page_name}}/>
    <x-sidebar/>

  <div class="container-xxl flex-grow-1 container-p-y">
     
    <div class="card mb-4">
                    <h5 class="card-header">Project Details</h5>
                    <!-- Account -->                   
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST"action="{{ route('update_projects_profile') }}" enctype="multipart/form-data">
                          @csrf
                          <h4 class="mb-0">Add project details</h4>
                           <h6 class="mb-0">You can change these details anytime in your project settings.</h6>
                         </hr>


                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                        id="preview-image"
                          src="{{ url('img/project_img/'.$member['icon_picture']) }}"
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
                            <input class="form-control" type="hidden" id="id" name="id" value="{{$member['id']}}" />
                            <input
                              class="form-control"
                              type="text"
                              id="title"
                              name="title"
                              value="{{$member['title']}}" 
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Key*</label>
                            <input class="form-control" type="text" name="key" id="key" value="{{$member['key']}}" />
                          </div>
                         


                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="category">Category</label>
                            <select id="category" name="category" class="select2 form-select">
                               @foreach($project_category as $category)
                                <option value="{{$category->id}}"  @if($category->id == $member['category']) selected @endif >{{$category->title}}</option>
                               @endforeach
                            </select>
                          </div>

                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="lead">Project lead</label>
                            <select id="lead" name="lead" class="select2 form-select">
                               @foreach($assignee as $lead)
                                <option value="{{$lead->id}}"  @if($lead->id == $member['lead']) selected @endif>{{$lead->name}}</option>
                               @endforeach
                            </select>
                          </div>

                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="default_assigned">Default assignee</label>
                            <select id="default_assigned" name="default_assigned" class="select2 form-select">
                              <option value="0">Unassigneed</option>
                              @foreach($assignee as $lead)
                                <option value="{{$lead->id}}"  @if($lead->id == $member['default_assigned']) selected @endif>{{$lead->name}}</option>
                               @endforeach
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