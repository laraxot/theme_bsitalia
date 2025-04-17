<div class="mb-2 mb-xxl-0">
    <!-- Video title  -->
    <h4> {{ $row->title }} </h4>
    <div class="d-flex mt-3 align-items-center">
        <div>
            <div class="mb-0">{{ $row->type }}</div>
            @if (!is_null($row->channel->logo))
                <div class="avatar me-2">
                    <img class="avatar-img rounded-circle" src="{{ $row->channel->logo }}" alt="">
                </div>
            @else
                <h6 class="mb-0">{{ $row->channel->name }}</h6>
            @endif
        </div>


    </div>
    {{-- <div class="d-flex mt-3 align-items-center">
        <!-- Avatar -->
        <div class="avatar me-2">
            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg"
                alt="">
        </div>
        <!-- Avatar name -->
        <div>
            <h6 class="mb-0"> <a href="#!"> Frances Guerrero </a> </h6>
            <nav class="nav nav-divider small">
                <span class="nav-item">145.2K views</span>
                <span class="nav-item">12 dec, 2022</span>
            </nav>
        </div>
    </div> --}}
</div>
