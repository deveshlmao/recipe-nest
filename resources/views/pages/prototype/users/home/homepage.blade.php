<x-mylayouts.layout-prototype>

<style>
    .blog-entry {
        border-bottom: 1px solid #000010;
        padding: 5px !important;
    }


</style>

    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <!-- main column -->
                    <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                            @foreach($chef_data as $chef)
                            <div class="col-md-12">
                                <div class="blog-entry ftco-animate d-md-flex">
                                    <a href="{{ route('chefs.show', $chef->id) }}" class="img img-2" style="background-image: url('{{ $chef->getImage() }}');"></a>
                                    <div class="text text-2 pl-md-4">
                                        <h3 class="mb-2"><a href="{{ route('chefs.show', $chef->id) }}">{{ $chef->name }}</a></h3>
                                        <div class="meta-wrap">
                                            <p class="meta">
                                                <span><i class="icon-calendar mr-2"></i>{{ $chef->created_at->format('F j, Y') }}</span>
                                                <span><a href="{{ route('chefs.show', $chef->id) }}"><i class="icon-folder-o mr-2"></i></a></span>
                                                <span><i class="icon-comment2 mr-2"></i>5 Comments</span>
                                            </p>
                                        </div>
                                        <p class="mb-4">{{ $chef->short_description }}</p>
                                        <p><a href="{{ route('chefs.show', $chef->id) }}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> 

                        <div class="row">
                            <div class="col">
                                <div class="block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- sidebar  -->
                    <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
                        <!-- sidebar content here -->
                        <div class="sidebar-box pt-md-4">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon icon-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">American <span>(6)</span></a></li>
                                <li><a href="#">Indian <span>(8)</span></a></li>
                                <li><a href="#">Mexican <span>(2)</span></a></li>
                                <li><a href="#">Italian <span>(2)</span></a></li>
                                <li><a href="#">Fast Food <span>(7)</span></a></li>
                            </ul>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Popular Chefs</h3>
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url('{{ $chef->getImage() }}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{ $chef->id}}">{{ $chef->name }}</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
            
        </section>
    </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->    




</x-mylayouts.layout-prototype>