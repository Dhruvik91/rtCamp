<?php
// Sample skills data (you can fetch this data from a database or another source)
$skills = [
    "Web Development",
    "Graphic Design",
    "Digital Marketing",
    "Data Analysis",
    "Project Management"
];
?>

<!-- Display skills data using PHP -->
<ul>
    <?php foreach ($skills as $skill) { ?>
        <li><?php echo $skill; ?></li>
    <?php } ?>
</ul>
