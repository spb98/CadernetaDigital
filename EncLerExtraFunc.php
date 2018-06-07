<?php include("ConfigsDB.php");

if(isset($_POST["employee_id"]))
{
    $output = '';
    $query = "SELECT * FROM recados WHERE IdRecados = '".$_POST["employee_id"]."'";
    $result = mysqli_query($db, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Mensagem</label></td>  
                     <td width="70%">'.$row[4].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Data de Envio</label></td>  
                     <td width="70%">'.$row[5].'</td>  
                </tr>  
                ';
    }
    $output .= "</table></div>";
    echo $output;
}
?>
