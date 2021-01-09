<?php

 $lga=[];
           $dbcon = new mysqli('localhost', 'root', '', 'bincom');
           $query="SELECT * FROM lga";
           ($qr=$dbcon->query($query));


    if($qr->num_rows > 0){
        while($row=$qr->fetch_assoc()){
            $lga[$row['lga_id']]=$row['lga_name'];
        }
    }

    ?>

<div>
    <label for="lga">lga</label>
       <select name="lga_id" id="lga_id">
                    <option value=''>--Select--</option>
                        <?php if(!empty($lga)){
                            foreach($lga as $id=>$name){
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>
                    </select>
                </div>

                <div>
                    <select name="uniqueid" id="uniqueid">
                    <option value=''>--Select lga First--</option>
                    </select>
                </div>





<script src="js/jquery.js"></script>
    <script type="text/javascript">
        $("#lga_id").change(function(){
            get_pollingunit_result();
        });    
        

        function get_pollingunit_result(){
            var lga_id=$("#lga_id").val();
            $.ajax({
                url:'info.php',
                type:'get',
                data:{"lga_id":lga_id},
                success:function(data){
                     //alert(data);
                  var polling_unit_obj=JSON.parse(data);
                  var polling_unit_string='';
                  $.each(polling_unit_obj,function(k,v){
                    polling_unit_string+="<option>"+v.uniqueid+"</option>";
                  })

                  $("#uniqueid").html(polling_unit_string);
                 
                },
                error:function(){
                    alert("Sorry o, Problem dey o");
                }
            });
        }
    </script>