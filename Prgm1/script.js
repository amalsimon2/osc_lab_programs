let images = ["./assets/img1.jpg", "./assets/img2.jpg", "./assets/img3.jpg", "./assets/img4.jpg", "./assets/img5.jpg", "./assets/img6.jpg"];
let MagicShow = document.getElementById("Magic_show");
let index = 0;

let changeimage = () => {
    index++;
    if (index >= images.length) {
        index = 0;
    }
    MagicShow.src = images[index];
};

setInterval(changeimage, 3000);