<div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1>Customers list</h1>
    <div class="list">
        <form style="margin:.5em;" method="post"> 
            <input type="text" name="keyword">
            <select name="id_cate" style="padding: .5em;">
                <option value="0" selected>Select All</option>
            <?php
            // echo $category_list;
                    foreach ($category_list as $category) {
                        extract($category);
                        // var_dump ($category);
                        // ini_set('display_errors', '1');
                        echo '<option value="' . $id_cate . '">'. $name_cate .'</option>';
                    }
                    ?>
            </select>
            <input type="submit" name="filter_list" value="FILTER">
        </form>

        <table>
            <tr class="row_first">
                <!-- <th></th> -->
                <th></th>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Situation</th>
                <th></th>
                <th></th>
                <!-- <th></th> -->
            </tr>

            <?php
            foreach ($userlist as $user) {
                extract($user);
            //     $editproduct = "index.php?act=updateproduct&id_pro=" . $id_pro;
            //     $deleteproduct = "index.php?act=deleteproduct&id_pro=" . $id_pro;
            //     $img_file = '../upload/' . $img_pro;
            // if(is_file($img_file)){
            //     $img = '<img src="'. $img_file.'" height="50">';
            // }else{
            //     $img = '<img src="'. $img_pro.'" height="50">';
            // }

                echo ' <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id_user.'</td>
                    <td>'.$name_user.'</td>
                    <td>'. $email . '</td>
                    <td>'.$tel_user.'</td>
                    <td>'.$price_sale.'</td>
                    <td></td>
                    
                    <td>
                    <a href=' . $edituser .'><input style="margin: .5em;" type="button" value="Edit"></a>
                    <a href='. $deleteuser.'><input type="button" value="Delete"></a> </td>
                    </td>
                </tr>';
            }
            ?>
        </table>
    </div>
    <div class="row_last">
        <input type="button" value="Choose all">
        <input type="button" value="No choose more">
        <a href='index.php?act=addproducts'>
            <input type="button" value="Add new">
        </a>

    </div>
</div>