    <x-header  title={{$page_name}}/>
    <x-sidebar/> 
      <div class="main-panel">
        <div class="">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                   <div class="home-tab d-sm-flex align-items-center justify-content-between border-bottom"> 
                    <div>
                       <div class="btn-wrapper"> 
                          <button class="btn btn-primary text-white align-items-center"><i class="icon-eye"></i> Show</button>
                          <a href="#" class="btn btn-warning text-white align-items-center" type="button"  data-bs-toggle="modal" data-bs-target="#largeModal"><i class="icon-plus"></i> New</a>
                          <button id="download-xlsx" class="btn btn-success text-white align-items-center btn-xs"><i class="icon-download"></i>Export</button>
                         <!--  <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                          <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                          <input type="text" class="btn btn-otline-dark align-items-center" placeholder="Search" aria-label="">
                          <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>  -->
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

    <x-footer/>







        <!--Create New  Large Modal -->
          <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Create New Department</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                 <form id="formAccountSettings" method="POST"action="{{ route('department_add') }}" enctype="multipart/form-data">
                          @csrf
                <div class="modal-body"> 
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name*</label> 
                             <input class="form-control" type="text" name="name" id="name" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Status</label>
                            <select id="status" name="status" class="select2 form-select">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                            </select>
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



          <!--Edit Large Modal -->
          <div class="modal fade" id="largeModaledit" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel3">Edit Department</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                 <form id="formAccountSettings" method="POST"action="{{ route('update_department_profile') }}" enctype="multipart/form-data">
                          @csrf
                <div class="modal-body"> 
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Name*</label> 
                             <input class="form-control" type="hidden" name="id" id="editid" value="" />
                             <input class="form-control" type="text" name="name" id="editname" value="" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Status</label>
                            <select id="editstatus" name="status" class="select2 form-select">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                            </select>
                          </div>  
                        </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
                 </form>
              </div>
            </div>
          </div>


                    <script type="text/javascript">
                      function edit_row(e,cell)                      
                      {
                        $("#editid").val();
                        $("#editname").val();
                        $("#editstatus").val();
                        var id=cell.getRow().getData().id;
                        var name=cell.getRow().getData().name;
                        var isactive=cell.getRow().getData().isactive;

                        $("#editid").val(id);
                        $("#editname").val(name);
                        $("#editstatus").val(isactive);

                        $("#largeModaledit").modal('show');
                      }  

                      function delete_row(e,cell)                      
                      {
                        alert(cell.getRow().getData().id);
                        console.log(cell.getRow().getData().id);
                      }

                       function delete_row(e,cell)                      
                      {
                       var id=cell.getRow().getData().id;
                       let url = 'department_delete/'+id+'';
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

                      var tabledata = '<?php echo $members ;?>';
                      var table = new Tabulator("#example-table", {
                          height:"450px",
                          pagination:true, //enable.
                          paginationSize:50, // this option can take any positive integer value  
                          data:tabledata, //assign data to table
                          layout:"fitColumns", //fit columns to width of table (optional)
                          columns:[
                          {title:"Name", field:"name"},
                          {title:"Status", field:"isactive", hozAlign:"center", formatter:"tickCross"},
                          {formatter:editIcon, width:20, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            edit_row(e,cell);
                          }},
                          { formatter:deleteIcon, width:20, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            delete_row(e,cell);
                          }},

                          ],
                      });

                        //trigger download of data.xlsx file
                    document.getElementById("download-xlsx").addEventListener("click", function(){
                        table.download("xlsx", "Department.xlsx", {sheetName:"Department Data"});
                    });
                    </script>