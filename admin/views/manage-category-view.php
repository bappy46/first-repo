<?php
    $obj_adminback = new adminBack();
    $ctg_data = $obj_adminback->display_category();

?>


<h2>Manage Category</h2>

<table class="table">

    <thead>
        <tr>
            <th>Ctg id</th>
            <th>Category</th>
            <th>Description</th>
            <th>Update/delete</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($ctg=mysqli_fetch_assoc($ctg_data)){
        ?>

        <tr>
            <td><?php echo $ctg['ctg_id']; ?></td>
            <td><?php echo $ctg['ctg_name']; ?></td>
            <td><?php echo $ctg['ctg_des']; ?></td>
            <td>
                <a class="btn btn-success" href="#">Update</a>
                <a class="btn btn-danger" href="#">Delete</a>
            </td>
        </tr>

        <?php } ?>

    </tbody>


</table>