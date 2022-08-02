    <x-header  title={{$page_name}}/>
    <x-sidebar/>
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="col-lg-12 col-md-12 order-1">
                  <div class="row">
                  <meta name="csrf-token" content="{{ csrf_token() }}">
                   @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="{{ url('img/project_img/'.$project->icon_picture) }}"
                                alt="icon"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <a href="projects/activity/{{$project->key}}/{{$project->id}}">
                          <span class="fw-semibold d-block mb-1">{{ $project->key }}</span>
                          <h3 class="card-title mb-2">{{ $project->title }}</h3>                            
                          </a>
                          <small class="text-success fw-semibold"><i class="bx bx-calendar"></i>{{ $project->start }}</small>
                        </div>
                      </div>
                    </div>
                 @endforeach
                  </div>
                </div>
             </div>
    <x-footer/> 
</body>
</html>