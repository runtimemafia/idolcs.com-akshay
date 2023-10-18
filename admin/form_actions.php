<?php

    $gobackhref = "../admin";
    include "../db.php";

    if(isset($_POST["new_subject"])){
        $semester = mysqli_escape_string($db, $_POST["semester"]);
        $subject_no = mysqli_escape_string($db, $_POST["subject_no"]);
        $subject_name = mysqli_escape_string($db, $_POST["subject_name"]);

        $query = "INSERT INTO `subjects` (`id`, `semester`, `subject_no`, `subject_name`) VALUES (NULL, '$semester', '$subject_no', '$subject_name')";
        $result = mysqli_query($db, $query);
        if($result){
            echo "Success!";
            echo "<a href='$gobackhref'>click here to go back</a>";
        }
    }elseif(isset($_POST["new_chapter"])){
        $subject_id = mysqli_escape_string($db, $_POST["subject_id"]);
        $chapter_no = mysqli_escape_string($db, $_POST["chapter_no"]);
        $chapter_name = mysqli_escape_string($db, $_POST["chapter_name"]);
        $tg_link = mysqli_escape_string($db, $_POST["tg_link"]);

        $query = "INSERT INTO `chapters` (`id`, `subject_id`, `chapter_no`, `chapter_name`, `tg_link`) VALUES (NULL, '$subject_id', '$chapter_no', '$chapter_name', '$tg_link')";
        $result = mysqli_query($db, $query);
        if($result){
            echo "Success!";
            echo "<a href='$gobackhref'>click here to go back</a>";
        }
    }elseif(isset($_POST["new_lecture"])){
        $subject_id = mysqli_escape_string($db, $_POST["subject_id"]);
        $title = mysqli_escape_string($db, $_POST["title"]);
        $length = mysqli_escape_string($db, $_POST["length"]);
        $date = mysqli_escape_string($db, $_POST["date"]);
        $instructor = mysqli_escape_string($db, $_POST["instructor"]);
        $pcp_centre = mysqli_escape_string($db, $_POST["pcp_centre"]);
        $youtube_link = mysqli_escape_string($db, $_POST["youtube_link"]);

        $query = "INSERT INTO `lectures` (`id`, `subject_id`, `title`, `length`, `date`, `instructor`, `pcp_centre`, `youtube_link`) VALUES (NULL, '$subject_id', '$title', '$length', '$date', '$instructor', '$pcp_centre', '$youtube_link')";
        $result = mysqli_query($db, $query);
        if($result){
            echo "Success!";
            echo "<a href='$gobackhref'>click here to go back</a>";
        }
    }elseif(isset($_POST["new_resource"])){
        echo "new resource request";
        echo "<br>";
        $title = mysqli_escape_string($db, $_POST["title"]);
        $description = mysqli_escape_string($db, $_POST["description"]);
        $link = mysqli_escape_string($db, $_POST["link"]);

        $query = "INSERT INTO `resources` (`id`, `title`, `description`, `link`) VALUES (NULL, '$title', '$description', '$link')";
        $result = mysqli_query($db, $query);
        if($result){
            echo "Success!";
            echo "<a href='$gobackhref'>click here to go back</a>";
        }else{
            echo "error";
        }
    }

?>