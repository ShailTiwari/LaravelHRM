 <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="home" class="app-brand-link">
              <span class="app-brand-logo demo">                
                     <img src="{{ asset('img/aloha.png') }}"  style="width: 185px;" alt="logo"> 
              </span>
            </a>
            
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
             @foreach($loggedInUser as $member)
           <li class="menu-item">
              <a href="/{{$member['route']}}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-layout"></i>
                <!-- <i class="{{$member['icon']}}"></i> -->
                <div data-i18n="Analytics">{{$member['name']}}</div>
              </a>
            </li>            
          @endforeach 
          </ul>
        </aside>
        <!-- / Menu -->