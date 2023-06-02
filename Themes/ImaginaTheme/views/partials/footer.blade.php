<x-ibuilder::block systemName="blockWhatsAppFixed"/>
<footer style="background-image: url({{setting("icustom::imageBackgroundFooter")}})">
  <x-isite::edit-link link="/iadmin/#/site/settings?settings=imageBackgroundFooter&module=icustom"/>
  <div class="footer-top py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo-footer">
          <x-isite::logo name="logo2"/>
          <x-isite::social/>
        </div>
        <div class="col-md-3 info-contact-footer">
          <div class="title-footer pb-2">
            {{trans('icustom::common.footer.titleContact')}}
          </div>
          <x-isite::contact.emails/>
          {{--          <x-isite::contact.phones/>--}}
          <x-isite::whatsapp layout="whatsapp-layout-1"/>
          <x-isite::contact.addresses/>
        </div>
        <div class="col-md-3">
          <div class="title-footer pb-2">
            {{trans('icustom::common.footer.titleServices')}}
          </div>
          <x-isite::menu id="footerMenuService" layout="category-menu-layout-2" menuAfter="footerMenuService"
                         :withHome="false"/>
        </div>
        <div class="col-md-3">
          <div class="title-footer pb-2">
            {{trans('icustom::common.footer.titleInfo')}}
          </div>
          <x-isite::menu id="footerMenuProperties" layout="category-menu-layout-2" menuAfter="footerMenuProperties"
                         :withHome="false"/>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-start">
          <x-isite::LogoImagina/>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <x-isite::Copyright/>
        </div>
      </div>
    </div>
  </div>
</footer>
