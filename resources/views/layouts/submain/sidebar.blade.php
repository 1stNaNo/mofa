<aside class="sidebar">

  {{-- <hr style="margin: 8px 0;"/> --}}

  {{-- video widget --}}
  <object data="{{$video->link}}" width="320" height="215"></object>

  {{-- most viewed , most commented, last new  --}}
  <div class="tabs mb-xlg">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#latestPosts" data-toggle="tab" class="font12">{{trans('resource.latestNews')}}</a></li>
      <li><a href="#viewedPosts" data-toggle="tab" class="font12">{{trans('resource.most_viewed')}}</a></li>
      <li><a href="#commentPosts" data-toggle="tab" class="font12">{{trans('resource.most_comment')}}</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="latestPosts">
        <ul class="simple-post-list">
          @foreach ($latest as $item)
            <li>
              <div class="post-image">
                <div class="img-thumbnail">
                  <a href="/post/{{$item->id}}">
                    <img src="{{$item->thumbnail}}" alt="" style="height: 50px; width: 50px;">
                  </a>
                </div>
              </div>
              <div class="post-info">
                <a href="/post/{{$item->id}}"><div style="overflow: hidden; height: 50px; font-size: 12px;line-height: 18px; color: #000;">{{$item->title}}</div></a>
                <div class="post-meta">
                   {{$item->update_date}}
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="tab-pane" id="viewedPosts">
        <ul class="simple-post-list">
          @foreach ($viewed as $item)
            <li>
              <div class="post-image">
                <div class="img-thumbnail">
                  <a href="/post/{{$item->id}}">
                    <img src="{{$item->thumbnail}}" alt="" style="height: 50px; width: 50px;">
                  </a>
                </div>
              </div>
              <div class="post-info">
                <a href="/post/{{$item->id}}"><div style="overflow: hidden; height: 50px; font-size: 12px;line-height: 18px;">{{$item->title}}</div></a>
                <div class="post-meta">
                   {{$item->update_date}}
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="tab-pane" id="commentPosts">
        <ul class="simple-post-list">
          @foreach ($comment as $item)
            <li>
              <div class="post-image">
                <div class="img-thumbnail">
                  <a href="/post/{{$item->id}}">
                    <img src="{{$item->thumbnail}}" alt="" style="height: 50px; width: 50px;">
                  </a>
                </div>
              </div>
              <div class="post-info">
                <a href="/post/{{$item->id}}"><div style="overflow: hidden; height: 50px; font-size: 12px;line-height: 18px;">{{$item->title}}</div></a>
                <div class="post-meta">
                   {{$item->update_date}}
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>



  <h4 class="heading-primary">{{trans('resource.viewfile')}}</h4>
  <blockquote class="with-borders">
    <ul style="list-style: none; padding-left: 0;">
    @foreach($filetypes as $filetype)
      <li class="file-item">
        <a href="/file/{{$filetype->ft_id}}">
          <i class="fa fa-{{$filetype->icon}}" style="cursor: pointer;"></i>
          <label style="cursor: pointer;">{{$filetype->source}}</label>
          <input type="hidden" value="{{$filetype->ft_id}}" name="type_id"/>
        </a>
      </li>
    @endforeach
    </ul>
  </blockquote>
  <iframe id="forecast_embed" type="text/html" frameborder="0" height="270" width="260" src="http://tsag-agaar.gov.mn/embed/?name={{$weather[0]->link}}&color=ef6e25&color2=cc530e&color3=ffffff&color4=ffffff&type=vertical&tdegree=cwidth=270"> </iframe>
  <!-- POLL START -->
  @if(!empty($poll))
  {{ csrf_field() }}
  <hr>
  <div class="row">
    <div class="col-md-12">
      <div class="fb-page" data-href="https://www.facebook.com/&#x425;&#x4af;&#x43d;&#x441;-&#x425;&#x4e9;&#x434;&#x4e9;&#x4e9;-&#x410;&#x436;-&#x410;&#x445;&#x443;&#x439;-&#x425;&#x4e9;&#x43d;&#x433;&#x4e9;&#x43d;-&#x4ae;&#x439;&#x43b;&#x434;&#x432;&#x44d;&#x440;&#x438;&#x439;&#x43d;-&#x42f;&#x430;&#x43c;-317636401956772/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/&#x425;&#x4af;&#x43d;&#x441;-&#x425;&#x4e9;&#x434;&#x4e9;&#x4e9;-&#x410;&#x436;-&#x410;&#x445;&#x443;&#x439;-&#x425;&#x4e9;&#x43d;&#x433;&#x4e9;&#x43d;-&#x4ae;&#x439;&#x43b;&#x434;&#x432;&#x44d;&#x440;&#x438;&#x439;&#x43d;-&#x42f;&#x430;&#x43c;-317636401956772/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/&#x425;&#x4af;&#x43d;&#x441;-&#x425;&#x4e9;&#x434;&#x4e9;&#x4e9;-&#x410;&#x436;-&#x410;&#x445;&#x443;&#x439;-&#x425;&#x4e9;&#x43d;&#x433;&#x4e9;&#x43d;-&#x4ae;&#x439;&#x43b;&#x434;&#x432;&#x44d;&#x440;&#x438;&#x439;&#x43d;-&#x42f;&#x430;&#x43c;-317636401956772/">Хүнс, Хөдөө Аж Ахуй, Хөнгөн Үйлдвэрийн Яам</a></blockquote></div>
    </div>
  </div>
  <hr>

  <blockquote class="blockquote-secondary">
    <h6 class="heading-primary">{{trans('resource.polling')}}</h6>
  </blockquote>
  <blockquote class="with-borders">
    <blockquote class="">
      <h6 class=""><strong>{{$poll->source}}</strong></h6>
    </blockquote>
    <div id="poll-list">
    @foreach($answers as $a)
      @if(Session::get('poll'))
        <div><label class="rd-label">{{$a->source}}</label>&nbsp;-&nbsp;<label class="rd-label pull-right">{{$a->total}}</label></div>
      @else
        <div class="radio"><label><input type="radio" name="answer" value="{{$a->id}}"> {{$a->source}}</label></div>
      @endif
    @endforeach
    </div>
    @if(!Session::get('poll'))
    <button class="btnPollSubmit btn btn-borders btn-default mr-xs mb-sm" type="button" onclick="submitpoll({{$poll->id}})">{{trans('resource.poll.givepoll')}}</button>
    @endif
  </blockquote>
  @endif
  <!-- POLL END -->
</aside>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>

$(document).ready(function(){
  $(".nano").nanoScroller();
});

function submitpoll(poll_id){
    if($("[name=answer]").val() != undefined && $("[name=answer]").val() != null){
        $.post("/submitpoll", {'answer_id': $("[name=answer]:checked").val(), 'poll_id' : poll_id, '_token' : $("[name='_token']").val()}, function(data){
            $obj = "";
            $.each(data, function(i, v){
                $obj += '<div><label class="rd-label">'+v.source+'</label>&nbsp;-&nbsp;<label class="rd-label pull-right" >'+v.total+'</label></div>';
            });
            $(".btnPollSubmit").remove();
            $("#poll-list").html($obj);
            refreshPollDashboard();
        });
    }
}
</script>
