@section('sidebar')

    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title" style="color: black;">Popular Post</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                    @foreach ($popular_posts as $post)
                        <a href="{{ route('posts.single', ['slug'=>$post->slug]) }}"
                        class="list-group-item list-group-item-action flex-column align-items-start" style="color: black;">
                        <img src="{{ $post->getImage() }}" alt="" class="img-fluid fload-left" style="width: 80px; height: 80px;">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <small >{{ $post->getPostDate() }}</small>
                        <small>| <i class="fa fa-eye"></i> {{ $post->views }}</small> 
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="widget">
            <h2 class="widget-title" style="color: black;">Categories</h2>
            <div class="link-widget">
                <ul>
                    @foreach ($cats as $cat)
                        <li><a href="{{ route('categories.single', ['slug'=>$cat->slug]) }}">
                            {{ $cat->title }} <span>{{ $cat->posts_count }}</span>
                        </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
