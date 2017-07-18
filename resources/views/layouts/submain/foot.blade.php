<footer id="footer" style="padding-top: 0;">

  <div class="footer-copyright" style="margin-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>{{trans('resource.link')}}</h4>
          <div class="owl-carousel owl-theme show-nav-hover" data-plugin-options='{"items": 6, "margin": 5, "loop": false, "nav": true, "dots": false}'>
            @foreach($weblinks as $w)
            <div>
              <a href="{{$w->link}}">
              <img alt="" class="img-responsive img-rounded" src="{{$w->img}}" style="height: 150px !important;"><p style="text-align: center; font-size: 11px; color: white;">{{$w->source}}</p>
            </a>
            </div>
            @endforeach
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <p>{{trans('resource.copyright')}}</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Vendor -->

<!-- Theme Base, Components and Settings -->
<script src="/js/theme.js"></script>

<!-- Current Page Vendor and Views -->

<script src="/js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/js/theme.init.js"></script>
