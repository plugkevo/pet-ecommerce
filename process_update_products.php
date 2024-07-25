<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $image = $_FILES['image']['tmp_name'];
        $imagePath = 'uploads/' . $_FILES['image']['name'];
        move_uploaded_file($image, $imagePath);
    
     
    
        $updateData = $conn->prepare("UPDATE products_table SET name = ?, price = ?, description = ?, image = ? WHERE no = ?");
        $updateData->bind_param("ssssi", $name, $price, $description, $imagePath, $id);
    
        if ($updateData->execute()) {
            $response = "Data updated successfully";
        } else {
            $response = "Error updating data: " . $conn->error;
        }
    }
?>