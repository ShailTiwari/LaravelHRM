    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <div class="container-xxl flex-grow-1 container-p-y">

              <div class="card mb-4">
                <div class="card-body">
                  <div class="row gy-3">
                     <!-- End Offcanvas -->
                    <div class="col-lg-3 col-md-6">                      
                      <div class="mt-3">
                        <input
                          class="form-control"
                          type="text"
                          placeholder="Search..."
                        >                     
                      </div>
                    </div> 

                    <div class="col-lg-2 col-md-6">
                      <div class="mt-3">
                        <button
                          class="btn btn-primary"
                          type="button"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasEnd"
                          aria-controls="offcanvasEnd"
                        >
                          Show
                        </button>                       
                      </div>
                    </div>

                     <!-- Default Offcanvas -->
                    <div class="col-lg-2 col-md-6">
                      <div class="mt-3">
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">New</button>                      
                      </div>
                    </div>



                  </div>
                </div>
              </div>






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
                               @foreach($project_category as $category)
                                <option value="{{$category->id}}" >{{$category->title}}</option>
                               @endforeach
                            </select>
                          </div>

                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="lead">Project lead</label>
                            <select id="lead" name="lead" class="select2 form-select">
                               @foreach($assignee as $lead)
                                <option value="{{$lead->id}}" >{{$lead->name}}</option>
                               @endforeach
                            </select>
                          </div>

                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="default_assigned">Default assignee</label>
                            <select id="default_assigned" name="default_assigned" class="select2 form-select">
                              <option value="0">Unassigneed</option>
                              @foreach($assignee as $lead)
                                <option value="{{$lead->id}}" >{{$lead->name}}</option>
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

 

      <div id="example-table"></div>

       <x-footer/> 


                    <script type="text/javascript">  

                      function edit_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'projects_edit/'+id+'';
                       document.location.href=url;
                        console.log(url);
                      }   
                      function delete_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'projects_delete/'+id+'';
                      // document.location.href=url;
                        console.log(url);
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


                      }                      



                      $('#image').change(function()
                      {                             
                      let reader = new FileReader();
                      reader.onload = (e) => { 
                        $('#preview-image').attr('src', e.target.result); 
                      }
                      reader.readAsDataURL(this.files[0]);                     
                     });
                    </script>



                    <script type="text/javascript">
                    var deleteIcon = function(cell, formatterParams, onRendered)
                    {
                    return "<i class='bx bx-trash-alt me-1'></i>"; 
                    };
                      var editIcon = function(cell, formatterParams, onRendered)
                    {
                    return "<i class='bx bx-edit-alt me-1'></i>"; 
                    };



                      var tabledata = '<?php echo $members ;?>';
                      var table = new Tabulator("#example-table", {
                          height:"411px",
                          pagination:true, //enable.
                          paginationSize:5, // this option can take any positive integer value  
                          data:tabledata, //assign data to table
                          layout:"fitColumns", //fit columns to width of table (optional)
                          columns:[
                          {title:"ID", field:"id", formatter:"rownum"},
                          {title:"Icon", field:"icon_picture", formatter:"image", formatterParams:{
                           height:"20px",
                           width:"20px",
                           urlPrefix:"{{ url('img/project_img/')}}/",
                          }},
                          {title:"Title", field:"title",editor:"input"},
                          {title:"key", field:"key",editor:"input"},
                          {title:"start", field:"start",editor:"input"},
                          {title:"description", field:"description",editor:"input"},
                          {title:"category", field:"category",editor:"input"},
                          {title:"Status", field:"isactive", hozAlign:"center", formatter:"tickCross", headerSort:false, headerVertical:false},
                          {formatter:editIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            edit_row(e,cell);
                          }},
                          {formatter:deleteIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            delete_row(e,cell);
                          }},

                          ],
                      });
                    </script>