@extends('layouts.app')
@section('title',"$setting->meta_title")
@section('meta_description',"$setting->meta_description")
@section('meta_keyword',"$setting->meta_keyword")
@section('content')
    <section class="section swiper-container swiper-slider swiper-classic bg-gray-2" data-loop="true" data-autoplay="4000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
            @foreach($latest_posts as $latest_post_item)
                <div class="swiper-slide text-center" data-slide-bg="{{ asset('uploads/posts/'.$latest_post_item->image) }}">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="swiper-slide-caption">
                                    <h3 data-caption-animate="fadeInUp" data-caption-delay="100">{{ $latest_post_item->name }}</h3>
                                    <a class="button button-primary" data-caption-animate="fadeInUp" data-caption-delay="300" href="{{ url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button swiper-button-prev"></div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </section>

    <section class="section section-md bg-gray-100">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-8">
                    <div class="main-component">
                        <!-- Heading Component-->
                        <article class="heading-component">
                            <div class="heading-component-inner">
                                <h5 class="heading-component-title">Popular news</h5>
                            </div>
                        </article>
                        <div class="row row-30">
                            @foreach($all_categories as $all_cate_item)
                                <div class="col-md-6">
                                    <!-- Post Future-->
                                    <article class="post-future">
                                        <a class="post-future-figure" href="{{url('tutorial/'.$all_cate_item->slug)}}">
                                            <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="" width="368" height="287"/>
                                        </a>
                                        <div class="post-future-main">
                                            <h4 class="post-future-title">
                                                <a href="{{url('tutorial/'.$all_cate_item->slug)}}">{{ $all_cate_item->name }}</a>
                                            </h4>
                                            <div class="post-future-meta">
                                                <!-- Badge-->
                                                <div class="badge badge-secondary">{{ $all_cate_item->slug }}</div>
                                                <div class="post-future-time"><span class="icon mdi mdi-clock"></span>
                                                    <time>{{ $all_cate_item->created_at->format('d-m-Y')  }}</time>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="post-future-text">
                                                <p>{{ $all_cate_item->description }}...</p>
                                            </div>
                                            <div class="post-future-footer group-flex group-flex-xs">
                                                <a class="button button-gray-outline" href="{{url('tutorial/'.$all_cate_item->slug)}}">Read more</a>
                                                <div class="post-future-share">
                                                    <div class="inline-toggle-parent">
                                                        <div class="inline-toggle icon material-icons-share"></div>
                                                        <div class="inline-toggle-element">
                                                            <ul class="list-inline">
                                                                <li>Share</li>
                                                                <li><a class="icon fa-facebook" href="#"></a></li>
                                                                <li><a class="icon fa-twitter" href="#"></a></li>
                                                                <li><a class="icon fa-google-plus" href="#"></a></li>
                                                                <li><a class="icon fa-instagram" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Aside Block-->
                <div class="col-lg-4">
                    <aside class="aside-components">
                        <div class="aside-component">
                            <!-- Heading Component-->
                            <article class="heading-component">
                                <div class="heading-component-inner">
                                    <h5 class="heading-component-title">Latest Posts</h5>
                                </div>
                            </article>
                            <!-- List Post Classic-->
                            <div class="list-post-classic">
                                @foreach($latest_posts as $latest_post_item)

                                    <!-- Post Classic-->
                                    <article class="post-classic">
                                        <div class="post-classic-aside">
                                            <a class="post-classic-figure" href="{{ url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">
                                                <img src="{{ asset('uploads/posts/'.$latest_post_item->image) }}" alt="img" width="94" height="94"/>
                                            </a>
                                        </div>
                                        <div class="post-classic-main">
                                            <p class="post-classic-title">
                                                <a href="{{ url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}">
                                                    {{ $latest_post_item->name }}
                                                </a>
                                            </p>
                                            <div class="post-classic-time"><span class="icon mdi mdi-clock"></span>
                                                <time>Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}</time>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach

                                <!-- Post Classic-->
                                <article class="post-classic">
                                    <div class="post-classic-main">
                                        <p class="post-classic-title">Advertise here</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
