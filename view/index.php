<?php
#here we're using 
//var_dump($dato);
require_once("layouts/header.php"); ?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table >
   <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Precio</td>
    <td>Acción</td>
   </tr> 
   <tbody>
       <tr>
           <?php 
             #We are controlling the empty database           
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>  
                        <td><?php echo $v['id'] ?> </td>
                        <td><?php echo $v['nombre']?>  </td>
                        <td><?php echo $v['precio']?>  </td>
                        <td>
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>"> EDITAR</a>
                            <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('Are you sure'); false"> ELIMINAR</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>  
                 <td colspan="3"> NO HAY registros </td>    
                </tr> 
                <?php endif;?>     
               
       </tr>
   </tbody>
</table>
<?php
require_once("layouts/footer.php");
?>
