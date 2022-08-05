    <x-header  title={{$page_name}}/>
    <x-sidebar/>
    <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
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
                    <div class="col-lg-2 col-md-6">
                      <div class="mt-3">
                       <button type="button" class="btn btn-primary" id="ajax-trigger">Data Show</button>                      
                      </div>
                    </div>


                    <div class="col-lg-2 col-md-6">
                      <div class="mt-3">
                       <button type="button" class="btn btn-warning" id="download-xlsx">Export</button>                      
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
                 <form id="formAccountSettings" method="POST"action="{{ route('create_employee_profile') }}" enctype="multipart/form-data">
                          @csrf
                <div class="modal-body"> 
                        

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
                            <input
                              class="form-control"
                              type="text"
                              id="name"
                              name="name"
                               value=""
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                               value=""
                              placeholder=""
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Organization</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="organization"
                              value=""
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                placeholder=""
                              />
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="231465"
                              maxlength="6"
                            />
                          </div>
                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="department">Department</label>
                            <select id="department" name="department" class="select2 form-select">
                              <option value="0">Select</option>
                              <option value="1">IT/Software</option>
                              <option value="2">Accounts</option>
                            </select>
                          </div>
                           <div class="mb-3 col-md-6">
                            <label class="form-label" for="department">Post</label>
                            <select id="post" name="post" class="select2 form-select">
                              <option value="0">Select</option>
                              <option value="1">Developer</option>
                              <option value="2">QA</option>
                              <option value="3">Accountent</option>
                              <option value="4">HR</option>
                              <option value="5">other</option>
                            </select>
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
                       let url = 'employee_edit/'+id+'';
                       document.location.href=url;
                        console.log(url);
                      }   
                      function delete_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'employee_delete/'+id+'';
                       //document.location.href=url;
                       // console.log(url);
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


                    //Build Tabulator
                  var table = new Tabulator("#example-table", {
                      height:"400px",
                      layout:"fitColumns",
                      placeholder:"No Data Set",
                      pagination:true, //enable.
                      paginationSize:50, // this option can take any positive integer value
                      columns:[
                          {title:"ID", field:"id", formatter:"rownum"},
                          {title:"Icon", field:"profile_picture", formatter:"image", formatterParams:{
                           height:"20px",
                           width:"20px",
                           //urlPrefix:"{{ url('img/')}}/",
                          }},
                          {title:"Name", field:"name",editor:"input"},
                          {title:"Email", field:"email",editor:"input"},
                          {title:"Status", field:"isactive", hozAlign:"center", formatter:"tickCross", headerSort:false, headerVertical:false},
                          {formatter:editIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            edit_row(e,cell);
                          }},
                          {formatter:deleteIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            delete_row(e,cell);
                          }},
                      ],
                  });
                    
                  
                  //trigger AJAX load on "Load Data via AJAX" button click
                  $("#ajax-trigger").click(function(){
                      table.setData("http://127.0.0.1:8000/employee_data");
                      
                  });

                  //trigger download of data.xlsx file
                    document.getElementById("download-xlsx").addEventListener("click", function(){
                        table.download("xlsx", "data.xlsx", {sheetName:"Employee Data"});
                    });

                    </script>