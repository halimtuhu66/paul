<!-- Blog Sidebar
================================================== -->
<div class="span4 sidebar">

    <!--Search-->
    <section>
        <div class="input-append">
            <form action="#">
                <input id="appendedInputButton" size="16" type="text" placeholder="Search"><button class="btn" type="button"><i class="icon-search"></i></button>
            </form>
        </div>
    </section>

    <!--Categories-->
    <h5 class="title-bg">Categories</h5>
    <ul class="post-category-list">
      <li><a href="/news"><i class="icon-plus-sign"></i>All</a></li>

      @foreach ($categories as $key => $value)
        <li><a href="/news/category/{{$value->id}}"><i class="icon-plus-sign"></i>{{$value->category}}</a></li>
      @endforeach
    </ul>

    <!--Popular Posts-->
    <h5 class="title-bg">Popular Posts</h5>
    <ul class="popular-posts">
        @foreach ($popular as $key => $value)
          <li>
              @if ($value->featured_image)
                <a href="/news/{{$value->id}}"><img src="{{asset('/images/news/'.$value->featured_image)}}" alt="{{$value->title}}" width="70px"></a>
              @endif
              <h6><a href="/news/{{$value->id}}">{{$value->title}}</a></h6>
              <em>Posted on {{$value->created_at}}</em>
          </li>
        @endforeach
    </ul>

    <!--Tabbed Content-->
    <h5 class="title-bg">More Info</h5>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#comments" data-toggle="tab">Comments</a></li>
        <li><a href="#about" data-toggle="tab">About</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="comments">
             <ul>
                @foreach ($comment as $key => $value)
                  <li><i class="icon-comment"></i>{{$value->user->username}} on <a href="/news/{{$value->news->id}}">{{str_limit($value->news->title, $limit = 35, $end = "...")}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="tab-pane" id="about">
            <p>Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.</p>

            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
        </div>
    </div>

    {{-- <!--Video Widget-->
    <h5 class="title-bg">Video Widget</h5>
    <iframe src="http://player.vimeo.com/video/24496773" width="370" height="208"></iframe> --}}
</div>
