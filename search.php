<?php require 'config.php';
?>
<table class="table table-bordered">
    <thead class="alert-info">    
        <tr>
            <th>firname</th>
            <th>lastname</th>
            <th>address</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        if(isset($_POST['search'])){
            $keyword=$_POST['keyword'];
            $query = $conn->prepare("SELECT * FROM usuario WHERE nome LIKE '$keyword' ");
            $query->execute();
        while($row=$query->fetch()){?>
            <tr>
                <td> <?php echo $row['nome'];?> </td>
                <td> <?php echo $row['sobrenome'];?> </td>
                <td>status</td>
                
            </tr>    
        <?php   
        }
        ?>
    </tbody>
   
</table>

<?php 
}
?>

