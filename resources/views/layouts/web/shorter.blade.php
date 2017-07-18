<div style="background: #efefef; padding: 5px 5px 5px 15px;">
  <div class="row">
    <div class="col-md-2">
      <span style="font-size: 16px; margin-right: 10px;">{{trans('resource.shorter')}} : </span>
    </div>
    <div class="col-md-10">
      <marquee style="margin:0;line-height: 12px;">
        @foreach($model as $item)
          <a style="margin-right: 300px; color: #000" href="{{$item->url}}" target="_{{$item->target}}">{{$item->source}}</a>
        @endforeach
      </marquee>
    </div>
  </div>
</div>
