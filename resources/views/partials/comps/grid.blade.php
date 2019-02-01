{{--
  
  Grid

  @include('partials.comps.grid', [
    'props' => App\Builder\Data::get($acf-field, [
      'title' => '',
      'editor' => '',
      'image' => '',
      'link' => '',
    ]),
  ]);
--}}

<div class="grid row">
  @foreach ($props as $item)
    <div class="col-12 md:col-4">{{-- col --}}
      <article class="grid-item">

        {{-- img --}}
        @if ($item->image)
          <a href="{{ $item->link }}">
            @if ($item->link)
              <figure class="img-mask ratio-1-1">{{-- img ratio --}}
                <img {{ App\image($item->image, 'large', 600) }}>{{-- img size/max-w --}}
              </figure>
            @endif
          </a>
        @endif

        {{-- meta --}}
        <header class="grid-item-main {{-- grid-item-in --}}">
          @if ($item->title)
            <div class="grid-item-title">
              {!! $item->title !!}
            </div>
          @endif
          @if ($item->editor)
            <div class="grid-item-editor">
              {!! $item->editor !!}
            </div>
          @endif
        </header>
      </article>
    </div>{{-- /.col-x --}}
  @endforeach
</div>{{-- /.grid --}}
