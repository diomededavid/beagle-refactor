@php
  $distroBaseList=\App\Controllers\TemplateDistros::getDistroBaseCategoryList(get_the_ID());
  $distroMemoryList=\App\Controllers\TemplateDistros::getDistroMemoryCategoryList(get_the_ID());
  $distroFeatsList=\App\Controllers\TemplateDistros::getDistroFeatsCategoryList(get_the_ID());
  # $distroBoardsList=\App\Controllers\TemplateDistros::getDistroBoardCategoryList(get_the_ID());
@endphp

@if($distroBaseList)
  @foreach($distroBaseList as $i)
    <span class="d-none" hidden itemprop="name">{{$i->name}}</span>
  @endforeach
@endif
<span class="d-none" hidden itemprop="version">{{get_field('distro-version')}}</span>
<span class="d-none" hidden itemprop="datePublished">{{get_field('distro-published-date')}}</span>
@if($distroMemoryList)
  @foreach($distroMemoryList as $i)
    <span class="d-none" hidden itemprop="memoryRequirements">{{$i->name}}</span>
  @endforeach
@endif
@if($distroFeatsList)
  @foreach($distroFeatsList as $i)
    <span class="d-none" hidden itemprop="featureList">{{$i->name}}</span>
  @endforeach
@endif
