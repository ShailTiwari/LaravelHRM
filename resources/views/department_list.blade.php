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

 

      <div id="example-table"></div>

       <x-footer/> 


                    <script type="text/javascript">
                      function delete_row(e,cell)                      
                      {
                        alert(cell.getRow().getData().id);
                        console.log(cell.getRow().getData().id);
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
                      /*return " <div class='dropdown'><button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>...  </div>";*/
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
                          /*{title:"Icon", field:"profile_picture", formatter:"image", formatterParams:{
                           height:"20px",
                           width:"20px",
                           urlPrefix:"{{ url('img/')}}",
                          }},*/
                          {title:"Name", field:"name",editor:"input"},
                          {title:"Status", field:"isactive", hozAlign:"center", formatter:"tickCross", headerSort:false, headerVertical:false},
                          {formatter:deleteIcon, width:40, hozAlign:"center", headerSort:false, cellClick:function(e, cell){
                            delete_row(e,cell);
                          }},

                          ],
                      });
                    </script>