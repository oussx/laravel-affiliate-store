
<div class="container">
    <div class="">

        <!-- Headline -->
        <div class="col-md-11 col-sm-10 col-xs-9">
            <h3 class="headline">Categories</h3>
            <span class="line margin-bottom-0"></span>
        </div>

        <!-- Navigation -->
        <div class="showbiz-navigation pull-right col-md-1 col-sm-2 col-xs-3" style="display: inline-flex">
            <div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
            <div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
        </div>
        <div class="clearfix"></div>


        <!-- Carousel -->
        <div id="new-arrivals" class="showbiz-container col-md-12">



            <!-- Categories -->
            <div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
                <div class="overflowholder">

                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <figure class="product">
                                    <div class="mediaholder">
                                        <a href="{{$category->slug}}">
                                            @if(isset($category->image))
                                            <img alt="" src="{{asset('uploads/categories/'.$category->id.'/'.$category->image)}}"/>
                                            @endif
                                            <div class="cover">
                                                @if(isset($category->image))
                                                    <img alt="" src="{{asset('uploads/categories/'.$category->id.'/'.$category->image)}}"/>
                                                @endif
                                            </div>
                                        </a>
                                        {{--<a href="{{$category->link}}" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>--}}
                                    </div>

                                    <a href="{{$category->slug}}">
                                        <section>
                                            <h5>{{$category->name}}</h5>
                                        </section>
                                    </a>
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
