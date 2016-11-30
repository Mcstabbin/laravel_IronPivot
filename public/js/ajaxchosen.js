

$(document).ready(function() 
{
    $('.w3-container').on("click", ".add_Check_box", function() {
       var data = $(this).attr("id");
        addCheckbox(data);
    });
});



function addCheckbox(name)
   {
       var container = $('#cblist');
       var inputs = container.find('input');
       var id = inputs.length+1;
      $('<input />', { type: 'checkbox', name: id, value: name,  class: 'w3-check w3-animate-zoom w3-tiny', id: name}).appendTo(container);
      $('<label />', { 'for': 'cb'+id, text: name,  class: 'w3-animate-right w3-tiny w3-validate' }).appendTo(container);
      document.getElementById(name).checked = true;  //checking the new checkbox
      $('<br>').appendTo(container);
    }

http://localhost/select.php



$(document).ready(function(){
$(".w3-container").on("click", ".view_product_data", function (){
               var data = $(this).attr("id");

           $.ajax({  
                url:"http://localhost/scripts/product_rec.php",  
                method:"post",  
                data:{data:data},  
           
                beforeSend: function() {
    $('#gap_products').html("<img src='C:/xampp/htdocs/img/game.gif' />");
                  },
                success:function(data){  $('#gap_products').html(data);}  
                  });  
    });
});



 $(document).ready(function(){  
      $('.view_am_data').click(function(){  
           var CompetitorSku = $(this).attr("id");  
           $.ajax({  
                url:"http://localhost/select.php",  
                method:"post",  
                data:{CompetitorSku:CompetitorSku},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModalPivot').modal("show");  
                }  
           });  
      }); 
      



 });  



  $(document).ready(function(){  
      $('.view_wf_data').click(function(){  
           var ThermoSKU = $(this).attr("id");  
           $.ajax({  
                url:"http://localhost/selectIronman.php",  
                method:"post",  
                data:{ThermoSKU:ThermoSKU},  
                success:function(data){  
                     $('#iron_detail').html(data);  
                     $('#dataModalIM').modal("show");  
                }  
           });  
      }); 
    });  



 $(document).ready(function(){  
      $('.view_thermo_sku').click(function(){  
           var CompetitorSku = $(this).attr("id");  
           $.ajax({  
                url:"http://localhost/selectComp.php",  
                method:"post",  
                data:{CompetitorSku:CompetitorSku},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModalComp').modal("show");  
                }  
           });  
      }); 
 });  















  $(document).ready(function(){  
      $('.view_reccomend').click(function(){  
           var data = $(this).attr("id");

           $.ajax({  
                url:"C:/xampp/htdocs/scripts/reccomend.php",  
                method:"post",  
                data:{data:data},  
                 beforeSend: function() {
    $('#reccomend').html("<img src='C:/xampp/htdocs/img/game.gif' />");
  },
                success:function(data){  
                     $('#reccomend').html(data);  
                 
                }  
           });  
      }); 
}); 



  $(document).ready(function(){  
      $('.view_gap_sku_reccomend').click(function(){  
           var data = $(this).attr("id");

           $.ajax({  
                url:"C:/xampp/htdocs/scripts/view_gap_sku_reccomend.php",  
                method:"post",  
                data:{data:data},  
                 beforeSend: function() {
    $('#reccomend').html("<img src='/img/game.gif' />");
  },
                success:function(data){  
                     $('#reccomend').html(data);  
                 
                }  
           });  
      }); 
}); 




/* 
var tableOffset = $("#table-1").offset().top;
var $header = $("#table-1 > thead").clone();
var $fixedHeader = $("#header-fixed").append($header);

$(window).bind("scroll", function() {
    var offset = $(this).scrollTop();

    if (offset >= tableOffset && $fixedHeader.is(":hidden")) {
        $fixedHeader.show();
    }
    else if (offset < tableOffset) {
        $fixedHeader.hide();
    }
});
 */




  $(document).ready(function(){  
      $('.view_sales_data').click(function(){  
           var workflow_id_shipto = $(this).attr("id");  
           $.ajax({  
                url:"scripts/sales_data.php",  
                method:"post",  
                data:{workflow_id_shipto:workflow_id_shipto},  
                success:function(data){  
                     $('#gap_products').html(data);  
                     $('#dataModalgap').modal("show");  
                }  
           });  
      }); 
});  
