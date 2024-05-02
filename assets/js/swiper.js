let slideIndex = 0;
showSlide(slideIndex);

function nextSlide() {
    showSlide(slideIndex += 1);
}

function prevSlide() {
    showSlide(slideIndex -= 1);
}

function showSlide(index) {
    const slides = document.getElementsByClassName("slide");
    
    if (index >= slides.length) {
        slideIndex = 0;
    } 
    if (index < 0) {
        slideIndex = slides.length - 1;
    }
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    slides[slideIndex].style.display = "block";
}

// обработчик для клавиатуры
document.addEventListener("keydown", function(event) {
    if (event.key === "ArrowLeft") {
        prevSlide();
    } else if (event.key === "ArrowRight") {
        nextSlide();
    }
});

// Свайп мышкой
document.addEventListener("mousedown", function(event) {
    startX = event.clientX;
});

document.addEventListener("mousemove", function(event) {
    if (startX !== null) {
        const currentX = event.clientX;
        const deltaX = currentX - startX;
        
        // Лево
        if (deltaX > 50) {
            prevSlide();
            startX = null;
        }

        // Право
        else if (deltaX < -50) {
            nextSlide();
            startX = null;
        }
    }
});

document.addEventListener("mouseup", function(event) {
    startX = null;
});
