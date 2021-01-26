// JavaScript Document

$(document).ready(function(){
			$("imput").click(function(){
				$(".myname").hide();
			});
		});
		
		
		 $(document).ready(function(){    
            $("#btnAdd").click(function(){     
                Add();    
            });    
            $("#btnSubstract").click(function(){    
                Substract();    
            })    
            $("#btnMultiply").click(function(){     
                Multiply();    
            })    
            $("#btnDivide").click(function(){    
                Divide();    
            })    
        });    
        function Add(){    
         var no1=parseInt($("#txtNo1").val());    
         var no2=parseInt($("#txtNo2").val());    
         var result =no1+no2;    
          $("#rslt").val(result);    
        }    
        function Substract(){    
         var no1=parseInt($("#txtNo1").val());    
         var no2=parseInt($("#txtNo2").val());    
         var result =no1-no2;    
          $("#rslt").val(result);    
        }    
        function Multiply(){    
         var no1=parseInt($("#txtNo1").val());    
         var no2=parseInt($("#txtNo2").val());    
         var result =no1*no2;    
          $("#rslt").val(result);    
        }    
        function Divide(){    
         var no1=parseInt($("#txtNo1").val());    
         var no2=parseInt($("#txtNo2").val());    
         var result =no1/no2;    
          $("#rslt").val(result);    
        }   
		
		$(document).ready(function(){
  $("#black").click(function(){
    var div = $("#sl");
    div.animate({height: '300px', opacity: '0.4'}, "slow");
    div.animate({width: '800px', opacity: '0.8'}, "slow");
    div.animate({height: '100px', opacity: '0.4'}, "slow");
    div.animate({width: '100px', opacity: '0.8'}, "slow");
  });
});

		$(document).ready(function(){
			$("#hide").click(function(){
				$("#abc").hide();
			});
			$("#show").click(function(){
				$("#abc").show();
			});
		});


		