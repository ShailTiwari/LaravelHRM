     <x-header  title={{$page_name}}/>
    <x-sidebar/> 
      <div class="main-panel">
        <div class="">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">  
                          @foreach($projects as $project)
                         <div class="col-md-3 col-lg-3 grid-margin stretch-card">
                            <div class="card bg-primary card-rounded">
                              <div class="card-body pb-0">
                                <a href="projects/activity/{{$project->key}}/{{$project->id}}">
                                <h4 class="card-title card-title-dash text-white">{{ $project->title }}</h4>
                                <h4 class="card-title card-title-dash text-white">{{ $project->start }}</h4>
                                </a>
                                <div class="row">
                                  <div class="col-sm-8">
                                    <p class="status-summary-ight-white mb-1">{{ $project->key }}</p>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="status-summary-chart-wrapper pb-4">
                                        <img class="img-sm rounded-10" src="{{ url('img/project_img/'.$project->icon_picture) }}" alt="profile">
                                       <!-- <img src="{{ url('img/project_img/'.$project->icon_picture) }}" alt=""> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                           @endforeach
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



