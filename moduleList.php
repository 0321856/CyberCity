<?php include "template.php"; ?>

<title>Module List</title>

<h1 class='text-primary'>Module List</h1>

<?php
$moduleList = $conn->query("SELECT Location, Module, ID FROM RegisteredModules");
?>

<div class="container-fluid">
    <?php
    while ($moduleData = $moduleList->fetch()) {
        ?>
        <div class="row">

            <div class="col-md-2">
                <a href="moduleDisplay.php?ModuleID=<?php echo $moduleData[2]; ?>"><?php echo $moduleData[0]; ?></a>
            </div>
            <div class="col-md-2">
                <!--            edit button-->
                <?php echo $moduleData[1]; ?>
            </div>

        </div>
        <?php
    }
    ?>

