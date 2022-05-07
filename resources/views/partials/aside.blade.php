
<ul class="list-group">
    @foreach($categories as $category)
        <li class="list-group-item">
            <a href="{{ route("category", ['category' => $category->seo_name]) }}">{{$category->name}}</a>
        </li>
    @endforeach
</ul>
