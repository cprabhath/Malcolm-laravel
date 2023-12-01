<div>
    <section class="galleries">
        <div class="carousel">
            <div class="btn-wrapper">
                <button class="button" onclick="moveGallery(1)">
                    <svg viewBox="0 0 448 512" width="100" title="arrow-left">
                        <path
                            d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z" />
                    </svg>
                </button>
                <button class="button" onclick="moveGallery(-1)">
                    <svg viewBox="0 0 448 512" width="100" title="arrow-right">
                        <path
                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z" />
                    </svg>
                </button>
            </div>
            <div id="gallery">
                <div class="image-expand-container">
                    <img src="{!! asset('images/1.jpg') !!}" class="image-expand active" alt="photo">
                </div>
                <div class="image-content-container">
                    <div class="content-wrapper active">
                        <p>"Explore Malcolm Lismore's world of photography, where the ordinary transforms into the extraordinary. His unique perspective turns everyday scenes into breathtaking artistry"</p>
                        <span>NAME</span>
                    </div>
                    <img src="{!! asset('images/2.jpg') !!}" alt="photo" class="image-wrapper">
                </div>
                <div class="image-expand-container">
                    <img src="{!! asset('images/3.jpg') !!}" class="image-expand" alt="photo">
                </div>
                <div class="image-content-container">
                    <div class="content-wrapper">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vero consequatur, pariatur rem
                            similique autem asperiores. Ad, mollitia. Sapiente, iusto."</p>
                        <span>NAME</span>
                    </div>
                    <img src="{!! asset('images/4.jpg') !!}" alt="photo" class="image-wrapper">
                </div>
                <div class="image-expand-container">
                    <img src="{!! asset('images/5.jpg') !!}" class="image-expand" alt="photo">
                </div>
                <div class="image-content-container">
                    <div class="content-wrapper">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vero consequatur, pariatur rem
                            similique autem asperiores. Ad, mollitia. Sapiente, iusto."</p>
                        <span>NAME</span>
                    </div>
                    <img src="{!! asset('images/6.jpg') !!}" alt="photo" class="image-wrapper">
                </div>
                <div class="image-expand-container">
                    <img src="{!! asset('images/1.jpg') !!}" class="image-expand" alt="photo">
                </div>
                <div class="image-content-container">
                    <div class="content-wrapper">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio vero consequatur, pariatur rem
                            similique autem asperiores. Ad, mollitia. Sapiente, iusto."</p>
                        <span>NAME</span>
                    </div>
                    <img src="{!! asset('images/2.jpg') !!}" alt=" photo" class="image-wrapper">
                </div>
            </div>
        </div>
    </section>
    @include('livewire.common.components.highlight')
    @include('livewire.common.components.footer')
</div>
@include('livewire.common.libraries.gallery')
