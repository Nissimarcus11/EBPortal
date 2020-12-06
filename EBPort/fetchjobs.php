<?php


$con = mysqli_connect('localhost','xme3','','EBPortal');


$sql="SELECT * FROM Jobs";


$result = mysqli_query($con,$sql);

$img = "";

while($row = mysqli_fetch_assoc($result)) {
    if($row['category'] == "Hotel/cooking Jobs"){
        $img = "<img src='assets/images/product-1-720x480.jpg' alt=''>";
    }
    if($row['category'] == "Accounting/finance Jobs"){
        $img = "<img src='assets/images/contact-1-720x480.jpg' alt=''>";
    }
    if($row['category'] == "Cleaning/organizing Jobs"){
        $img = "<img src='assets/images/product-2-720x480.jpg' alt=''>";
    }
    if($row['category'] == "Education/Tuitor Jobs"){
        $img = "<img src='assets/images/product-3-720x480.jpg' alt=''>";
    }
    if($row['category'] == "Medical/Health Jobs"){
        $img = "<img src='assets/images/Pharma.jpg' alt=''>";
    }
    echo "<div class='col-md-6' >
    <div class='trainer-item'>
        <div class='image-thumb'>".$img."</div>
        <div class='down-content'>
            <span>".$row['payscale']."</span>";

           echo "<h4>".$row['jobname']."</h4>";

            echo "<p>".$row['category']."</p>

            <ul class='social-icons'>
                <li><a href='job-details.html'>+ View More</a></li>
            </ul>
        </div>
    </div>
</div>";
// echo $row['category'];
}

mysqli_close($con);
?>