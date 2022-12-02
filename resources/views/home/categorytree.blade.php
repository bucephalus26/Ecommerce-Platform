<div class="subnav-content">
    @foreach($children as $subcategory)
    <ul id="nav">
        @if(count($subcategory->children))
            <li><a href="#">{{$subcategory->title}}</a>
                @include('home.categorytree', ['children' => $subcategory->children])
            </li>
        @else
            <!-- Produce link to page if no more children categories -->
            <li><a href="{{route('categoryproducts', ['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    
    </ul>
        
        
    @endforeach
</div>