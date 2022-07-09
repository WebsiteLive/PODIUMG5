$(document).ready(function(){

  $('#menu').click(function(){
      $(this).toggleClass('fa-times');
      $('header').toggleClass('toggle');
  });

  $(window).on('scroll load',function(){

      $('#menu').removeClass('fa0-times');
      $('header').removeClass('toggle');
  });
  $('a[href*="#"]').on('click',function(e){

      e.preventDefault();
  
      $('html, body').animate({
  
        scrollTop : $($(this).attr('href')).offset().top,
  
      },
        500, 
        'linear'
      );
  
    });
  
});

function getImage(imagename){
var newimg=imagename.replace(/^.*\\/,"");
$('#display-image').html(newimg);
}

let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');


document.querySelectorAll('.products-container .product').forEach(product =>{
product.onclick = () =>{
  preveiwContainer.style.display = 'flex';
  let name = product.getAttribute('data-name');
  previewBox.forEach(preview =>{
    let target = preview.getAttribute('data-target');
    if(name == target){
      preview.classList.add('active');
    }
  });
};
});

previewBox.forEach(close =>{
close.querySelector('.fa-times').onclick = () =>{
  close.classList.remove('active');
  preveiwContainer.style.display = 'none';
};
});


var myText = document.getElementById("my-text");
var result = document.getElementById("result");
var limit = 60;
result.textContent = 0 + "/" + limit;

myText.addEventListener("input",function(){
    var textLength = myText.value.length;
    result.textContent = textLength + "/" + limit;

    if(textLength > limit){
        myText.style.borderColor = "#ff2851";
        result.style.color = "#ff2851";
    }
    else{
        myText.style.borderColor = "#b2b2b2";
        result.style.color = "#737373";
    }
});