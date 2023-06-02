<header id="contentHeader">
  <div class="content h-100 d-flex align-items-center">
    <div class="container-fluid">
      <div class="row justify-content-center justify-content-sm-between px-xl-5 px-1">
        <div id="contentLogo" class="col-md-3 col-sm-3 d-flex align-items-center pt-3 pt-sm-0">
          <div id="contentLogo2" class="d-block w-100 logo-header">
            <x-isite::logo name="logo1"/>
          </div>
        </div>
        <div class="col-12 col-md-9 d-flex justify-content-around justify-content-md-end align-items-center">
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