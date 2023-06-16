<header>
  <div class="content h-100 d-flex align-items-center">
    <div class="container-fluid">
      <div id="contentHeader" class="row justify-content-center justify-content-sm-between px-xl-5 px-1">
        <div id="contentLogo" class="col-12 col-sm-5 col-md-3 d-flex align-items-center pt-2 pt-sm-0 pb-2 pb-sm-0">
          <div id="contentLogo2" class="d-block w-100 logo-header">
            <x-isite::logo name="logo1"/>
          </div>
        </div>
        <div class="col-12 col-sm-7 col-md-9 d-flex justify-content-around justify-content-md-end align-items-center pb-2 pb-sm-0">
          <div class="menu-header">
            <x-isite::menu id="mainMenu" layout="category-menu-layout-2" menuAfter="headerMenu" :withHome="false"/>
          </div>
          <div class="search col-2 col-md-auto px-0 order-3 order-lg-0">
            @livewire('isearch::search', ['layout' => 'search-layout-1'])
          </div>
          <x-ibuilder::block systemName="blockButtonScheduleYourAppointment"/>
        </div>
      </div>
    </div>
  </div>
</header>
<x-ibuilder::block systemName="blockSocialNetworksFixed"/>
