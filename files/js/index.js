$().ready(function (){
  $("#sql1").change (function (){sqls_geradas();});
  $("#sql2").change (function (){sqls_geradas();});
  $("#sql3").change (function (){sqls_geradas();});
  $("#sql4").change (function (){sqls_geradas();});
  $("#data").change (function (){sqls_geradas()});

  function sqls_geradas (){
      if ($("#sql1").is(":checked") && $("#data").val() != ""){
        $.post ("controller/sqls-geradas.php",{
          funcao: "sql1",
          dado: $("#data").val() 
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
      }

      if ($("#sql2").is(":checked") && $("#data").val() != ""){
        $.post ("controller/sqls-geradas.php",{
          funcao: "sql2",
          dado: $("#data").val()
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
      }

    if ($("#sql3").is(":checked") && $("#data").val() != ""){
      $.post ("controller/sqls-geradas.php",{
        funcao: "sql3",
        dado: $("#data").val()
      },function (data,status){
        if (status=="success"){
          $("#response").html(data);
          console.log(data);
        }
      });
    }

    if ($("#sql4").is(":checked") && $("#data").val() != ""){
      $.post ("controller/sqls-geradas.php",{
        funcao: "sql4",
        dado: $("#data").val()
      },function (data,status){
        if (status=="success"){
          $("#response").html(data);
          console.log(data);
        }
      });
    }


    }
});
