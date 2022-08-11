    <x-header  title={{$page_name}}/>
    <x-sidebar/>
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">                      
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <div class="home-tab d-sm-flex align-items-center justify-content-between border-bottom">
               

                  <div>
                    <div class="btn-wrapper"> 
                      <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                      <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                      <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                      <button  id="ajax-trigger" class="btn btn-primary text-white align-items-center"><i class="icon-eye"></i> Show</button>



                      

                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a> 
                      <a href="#" class="btn btn-warning text-white align-items-center" type="button"  data-bs-toggle="modal" data-bs-target="#largeModal"><i class="icon-plus"></i> New</a>
                      <button id="download-xlsx" class="btn btn-success text-white align-items-center btn-xs"><i class="icon-download"></i>Export</button>
                    </div>
                  </div>
                </div>
                  <div class="table-responsive">
                    <div id="example-table"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!--Create New  Large Modal -->
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
                 <form id="formAccountSettings" method="POST"action="{{ route('customer_create') }}" enctype="multipart/form-data">
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







    
       <x-footer/> 

 <script type="text/javascript">  

                      function edit_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'customer_edit/'+id+'';
                       document.location.href=url;
                        console.log(url);
                      }   
                      function delete_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'customer_delete/'+id+'';
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
                    return "<i class='icon-trash'></i>"; 
                    };
                       var editIcon = function(cell, formatterParams, onRendered)
                    {
                    return "<i class='icon-pencil'></i>"; 
                    };


                      var table = new Tabulator("#example-table", {
                      height:"450px",
                      layout:"fitColumns", 
                      pagination:"remote", //enable remote pagination
                      ajaxURL:"http://127.0.0.1:8000/customer_data", //set url for ajax request
                      paginationSize:20,
                      paginationSizeSelector:[20, 40, 50, 100],
                      columns:[
                         /* {title:"ID", field:"id", formatter:"rownum"},*/
                          {title:"Icon", field:"profile_picture", formatter:"image", formatterParams:{
                           height:"20px",
                           width:"20px",
                           urlPrefix:"{{ url('img/')}}/",
                          }},
                          {title:"Name", field:"name", width:100},
                          {title:"Last Name", field:"lastname", width:100},
                          {title:"Email", field:"email", width:200},
                          {title:"DOB", field:"dob", width:100},
                          {title:"Phone", field:"phone_no", width:200},
                          {title:"Company", field:"company", width:200},
                          {title:"Status", field:"isactive", hozAlign:"center", formatter:"tickCross", headerSort:false, headerVertical:false, width:50},
                          {formatter:editIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            edit_row(e,cell);
                          }},
                          {formatter:deleteIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            delete_row(e,cell);
                          }},
                      ],
                  });
                    
                  
                  //trigger AJAX load on "Load Data via AJAX" button click
                  /*$("#ajax-trigger").click(function(){
                      table.setData("http://127.0.0.1:8000/employee_data");
                      
                  });*/

                  //trigger download of data.xlsx file
                    document.getElementById("download-xlsx").addEventListener("click", function(){
                        table.download("xlsx", "data.xlsx", {sheetName:"Employee Data"});
                    });
                    </script>