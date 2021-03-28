let current_slide: number = 0; // Current Slide
let images: string[] = ['images/1.jpg', 'images/2.jpg', 'images/3.jpg', 'images/4.jpg', 'images/5.jpg', 'images/6.jpg']; // Images Array

// Opens Lightbox
function open_modal():void {
    document.getElementById("lightbox_container").style.display = "flex";
    document.body.style.overflow = "hidden";
    document.getElementById("gallery").style.filter = "blur(5px)";
}

// Closes Lightbox
function close_modal():void {
    document.getElementById("lightbox_container").style.display = "none";
    document.body.style.overflow = "initial";  
    document.getElementById("gallery").style.filter = "blur(0)";
}

// Sets Current Image to Lightbox when clicked
// Returns the Current Slide Index
function change_image(n: number):number {
    (document.getElementById("active_image") as HTMLImageElement).src = images[n];
    current_slide = n;
    return current_slide;
}

// Cycles Through Images
// n is either 1 (next slide) or -1 (previous slide)
function next_slide(n: number):number {

    if (current_slide < 1 && n == -1) {
        //IF at first slide AND selecting previous slide
        current_slide = images.length - 1;
        (document.getElementById("active_image") as HTMLImageElement).src = images[current_slide];
        return current_slide;

    } else if (current_slide < images.length - 1 && current_slide >= 0 && n == 1) {
        //IF at any slide besides the last AND going up
        current_slide = current_slide + 1;
        (document.getElementById("active_image") as HTMLImageElement).src = images[current_slide];
        return current_slide;

    } else if (current_slide == images.length - 1 && n == 1) {
        //IF at final slide last AND going up
        current_slide = 0;
        (document.getElementById("active_image") as HTMLImageElement).src = images[current_slide];
        return current_slide;

    } else {
        //Anything else (going down AND not at first slide)
        current_slide = current_slide - 1;
        (document.getElementById("active_image") as HTMLImageElement).src = images[current_slide];
        return current_slide;

    }
}