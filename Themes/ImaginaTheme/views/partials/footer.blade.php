{{--<x-ibuilder::block systemName="blockWhatsAppFixed"/>--}}
<footer style="background-image: url({{setting("icustom::imageBackgroundFooter")}})">
  <x-isite::edit-link link="/iadmin/#/site/settings?settings=imageBackgroundFooter&module=icustom"/>
  <div class="footer-top py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 pb-4 pb-lg-0 logo-footer text-center">
          <x-isite::logo name="logo2"/>
          <x-isite::social/>
        </div>
        <div class="col-md-6 col-lg-3 pb-4 pb-lg-0 info-contact-footer">
          <div class="title-footer pt-4 pt-md-0">
            {{trans('icustom::common.footer.titleContact')}}
          </div>
          <x-isite::contact.emails/>
          {{--          <x-isite::contact.phones/>--}}
          <x-isite::whatsapp layout="whatsapp-layout-1" :showCountry="true" :showNumberCountry="true"/>
          <x-isite::contact.addresses/>
        </div>
        <div class="col-md-6 col-lg-3 pb-4 pb-lg-0">
          <div class="title-footer pt-4 pt-md-0">
            {{trans('icustom::common.footer.titleServices')}}
          </div>
          @menu('footerMenuService')
          {{--
         <x-isite::menu id="footerMenuService"
                        layout="category-menu-layout-2"
                        menuAfter="footerMenuService"
                        :withHome="false"/>
                        --}}
        </div>
        <div class="col-md-6 col-lg-3 pb-4 pb-lg-0">
          <div class="title-footer pt-4 pt-md-0">
            {{trans('icustom::common.footer.titleInfo')}}
          </div>
          @menu('footerMenuProperties')
          {{--
          <x-isite::menu id="footerMenuProperties"
                         layout="category-menu-layout-2"
                         menuAfter="footerMenuProperties"
                         :withHome="false"/>
                         --}}
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container h-100">
      <div class="content-footer-bottom row align-items-center h-100">
        <div class="col-md-4 py-2 pt-md-0 d-flex justify-content-center justify-content-md-start">
          <x-isite::LogoImagina/>
        </div>
        <div class="col-md-8 py-2 pt-md-0 d-flex justify-content-center justify-content-md-end">
          <x-isite::Copyright/>
        </div>
      </div>
    </div>
  </div>
</footer>
