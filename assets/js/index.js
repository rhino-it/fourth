// menu fixed start
$(document).ready(function($) {
  $nav = $('.fixed-div');
  $nav.css('width', $nav.outerWidth());
  $window = $(window);
  $h = $nav.offset().top;
  $window.scroll(function() {
    if ($window.scrollTop() > $h) {
      $nav.addClass('fixed');
    } else {
      $nav.removeClass('fixed');
    }
  });
});
// menu fixed end

// menu click pod_menu start
var castle = false;
if ($(window).width()<990) {
  castle = true;
}
else {
  castle = false;
}
if (castle==true) {
  var a=document.querySelectorAll('.menu_click > li');
  for (var i = 0; i < a.length; i++) {
    a[i].onclick = click_m;
  }
  function click_m() {
    this.children[1].classList.toggle('q1');
  }
}
// menu click pod_menu end


// list medicoment start
function list(){
  var t1_li = document.querySelectorAll('.table_1_li li');
  var table_1 = document.getElementById('analys');
  var table_2 = document.getElementById('selected_analys');
  var r_s_m = document.getElementById('result_summa_medicoment');
  var summa_medicoment = parseInt($(r_s_m).text());
  for (var i = 0; i < t1_li.length; i++) {
    t1_li[i].onclick = add_medicoment;
  }

  function add_medicoment() { 
    this.className='list_none';  
    table_2.innerHTML += '<option id="'+$(this).attr("id")+'" value="'+this.value+'">'+$(this).text()+'</option>';
    summa_medicoment = summa_medicoment + parseInt($(this.children[0]).text());
    r_s_m.innerHTML = summa_medicoment;
    var t2_o = document.querySelectorAll('.table_2_option option');
    for (var i = 0; i < t2_o.length; i++) {
      t2_o[i].onclick = remove_medicoment;
    }
  }

  function remove_medicoment() {
    var text1 = $(this).text();
    var text2 = text1.match( /сом/i );
    var text3 = text2.index;
    var text_last = text1.lastIndexOf(' ', text3-3);
    var text_price = text1.substr(text_last, text3);
    var t1_li = document.querySelectorAll('.table_1_li li');
    for (var i = 0; i < t1_li.length; i++) {
      if ($(t1_li[i]).attr("id") == $(this).attr("id")) {
        t1_li[i].className='list_block';
      } 
    }
    summa_medicoment = summa_medicoment - parseInt(text_price);
    r_s_m.innerHTML = summa_medicoment;
    table_2.removeChild(this); 
    var t1_li = document.querySelectorAll('.table_1_option li');
    for (var i = 0; i < t1_li.length; i++) {
      t1_li[i].onclick = add_medicoment;
    }
  }
}

function click_medic_end(){
  var count_i=0;
  var t2_o = document.querySelectorAll('.table_2_option option');
  for (var i = 0; i < t2_o.length; i++) {
    var inp =  document.createElement('input');
    inp.name = 'q'+i;
    inp.value = t2_o[i].value;  
    inp.type = 'hidden';
    form.appendChild(inp);
    count_i=i;
  } 
  var inp =  document.createElement('input');
  inp.name = 'count_i';
  inp.type = 'hidden';
  inp.value = count_i+1;
  form.appendChild(inp);

  document.forms["form"].submit();
}

// list medicoment end


// results show start
function showOrHide(cb, cat) {
  cb = document.getElementById(cb);
  cat = document.getElementById(cat);
  if (cb.checked) cat.style.display = "block";
  else cat.style.display = "none";
}

$(document).ready(function(){
 $("input#check").change(function(){

  if ($(this).attr("checked")) {
    $('#').fadeIn().show();
    return;
  } else {
    $('#hide').fadeOut(300); 
  }

});
})


function changeClass(id){
  var change = document.getElementById("changeclass"+id);
  if( change.classList.contains('fa-chevron-down') ){
    change.classList.remove('fa-chevron-down');
    change.classList.add('fa-chevron-up');
  }
  else
    { change.classList.remove('fa-chevron-up');
  change.classList.add('fa-chevron-down');
}
}

  function id_pat(id)
  {
    // var b_u="<?php echo base_url().'index.php/ajax/test';?>";
    // $.ajax({
    //  url: BASE_URL + id,
    //  success: function (data) {
    //    $('#analys').html(data);
    //  }
    // });
    alert('РАБОТАЕТ!');
  } 