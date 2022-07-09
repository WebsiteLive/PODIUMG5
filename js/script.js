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