<script>
var galleryContainer = document.getElementById('gallery')
        var expandableImages = document.querySelectorAll('.image-expand')
        var content = document.querySelectorAll('.content-wrapper')
        var buttons = document.querySelectorAll('button')

        var count = 3;
        var imageIndex = 1;
        var width = 0;


        function moveGallery(n) {
            if (n < 0 && count > 0) {
                width -= 1109;
                galleryContainer.style.transform = `translateX(${width}px)`
                handleImages(n)
                showContent(n)
                imageIndex ++
            } else if (n > 0 && count < 3) {
                width += 1109;
                galleryContainer.style.transform = `translateX(${width}px)`
                handleImages(n)
                showContent(n)
                imageIndex --
            }

            count += n
            disableBtns()
        }

        function handleImages(n){
            if(n < 0){
                expandableImages[imageIndex + n].classList.toggle("active");
                expandableImages[imageIndex].classList.toggle("active")
            }else{
                expandableImages[imageIndex - 1].classList.toggle("active")
                expandableImages[imageIndex - 2].classList.toggle("active")
            }
        }

        function showContent(n){
            if(n < 0){
                content[imageIndex + n].classList.toggle("active")
                content[imageIndex].classList.toggle("active");
            }else{
                content[imageIndex - 1].classList.toggle("active")
                content[imageIndex - 2].classList.toggle("active")
            }
        }

        function disableBtns(){
            if (count === 0) {
                buttons[1].disabled = true;
                buttons[0].disabled = false;
            } else if (count === 3) {
                buttons[1].disabled = false;
                buttons[0].disabled = true;
            }else{
                buttons[0].disabled = false;
                buttons[1].disabled = false;
            }
        }

        disableBtns()
</script>
