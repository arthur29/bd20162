$().ready(function (){
  $("#sql1").change (function (){sqls_geradas();});
  $("#sql2").change (function (){sqls_geradas();});
  $("#sql3").change (function (){sqls_geradas();});
  $("#sql4").change (function (){sqls_geradas();});
  $("#sql5").change (function (){sqls_geradas();});
  $("#sql6").change (function (){sqls_geradas();});
  $("#sql7").change (function (){sqls_geradas();});
  $("#sql8").change (function (){sqls_geradas();});
  $("#sql9").change (function (){sqls_geradas();});
  $("#sql10").change (function (){sqls_geradas();});
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

    if ($("#sql5").is(":checked") && $("#data").val() != ""){
          $.post ("controller/sqls-geradas.php",{
            funcao: "sql5",
            dado: $("#data").val()
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
        }

        if ($("#sql6").is(":checked") && $("#data").val() != ""){
          $.post ("controller/sqls-geradas.php",{
            funcao: "sql6",
            dado: $("#data").val()
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
        }

        if ($("#sql7").is(":checked") && $("#data").val() != ""){
          $.post ("controller/sqls-geradas.php",{
            funcao: "sql7",
            dado: $("#data").val()
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
        }

        if ($("#sql8").is(":checked") && $("#data").val() != ""){
          $.post ("controller/sqls-geradas.php",{
            funcao: "sql8",
            dado: $("#data").val()
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
        }

        if ($("#sql9").is(":checked") && $("#data").val() != ""){
          $.post ("controller/sqls-geradas.php",{
            funcao: "sql9",
            dado: $("#data").val()
          },function (data,status){
            if (status=="success"){
              $("#response").html(data);
              console.log(data);
            }
          });
        }

        if ($("#sql10").is(":checked") && $("#data").val() != ""){
          $.post ("controller/sqls-geradas.php",{
            funcao: "sql10",
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
