function imgControll(event){
    var srcImg1 = document.getElementById(event).getAttribute('src');
    document.querySelector('.product_img--img').src = srcImg1;
   }