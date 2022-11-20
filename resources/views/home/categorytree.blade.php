@foreach($children as $subcategory)

    <div class="nav-item dropdown">
   
        <!-- if sub category has sub category -->
        @if(count($subcategory->children))
        <a href="#" class="nav-link" data-toggle="dropdown">{{$subcategory->title}}<i class="fa fa-angle-down float-right mt-1"></i></a>
        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
       
       
        
                <!-- recursive call to categorytree -->
            @include('home.categorytree', ['children' => $subcategory->children])
            
            </div>

        <!-- if sub category does not have sub category link to page -->
        @else
            <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}" class="dropdown-item">{{$subcategory->title}}</a>
        @endif
    </div>
    

  
@endforeach