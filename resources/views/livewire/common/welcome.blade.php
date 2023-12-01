<section>
    <div class="container-box">
        <div id="slide">
            @foreach ($welcomeHeadings as $welcomeheading)
            <div class="item" style="background-image: url({!! asset($welcomeheading->image) !!});">
                <div class="content">
                    <div class="name">{{ $welcomeheading->heading }}</div>
                    <div class="des">{{ $welcomeheading->description }}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="buttons">
            <button id="prev"><i class='bx bxs-chevron-left bx-sm'></i></button>
            <button id="next"><i class='bx bxs-chevron-right bx-sm'></i></button>
        </div>
    </div>
</section>
@include('livewire.common.libraries.slider')
