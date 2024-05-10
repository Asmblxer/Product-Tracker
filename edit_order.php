<?php

require 'dbcon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_id = $_POST['order_id'];
    $order_model = $_POST['model'];
    $order_type = $_POST['type'];
    $order_items = $_POST['items'];
    $nagar_required = $_POST['nagar_required'];
    $nagar_name = $_POST['nagar_name'];
    $nagar_start = $_POST['nagar_start'];
    $nagar_finish = $_POST['nagar_finish'];
    $nagar_cost = $_POST['nagar_cost'];
    $color_required = $_POST['color_required'];
    $estorgy_name = $_POST['estorgy_name'];
    $estorgy_start = $_POST['estorgy_start'];
    $estorgy_finish = $_POST['estorgy_finish'];
    $estorgy_cost = $_POST['estorgy_cost'];
    $tanged_required = $_POST['tanged_required'];
    $menaged_name = $_POST['menaged_name'];
    $menaged_start = $_POST['menaged_start'];
    $menaged_finish = $_POST['menaged_finish'];
    $menaged_cost = $_POST['menaged_cost'];
    $cloth_required = $_POST['cloth_required'];
    $clother_name = $_POST['clother_name'];
    $clother_start = $_POST['clother_start'];
    $clother_finish = $_POST['clother_finish'];
    $cloth_cost = $_POST['cloth_cost'];
    $glass_required = $_POST['glass_required'];
    $glasser_name = $_POST['glasser_name'];
    $glasser_start = $_POST['glasser_start'];
    $glasser_finish = $_POST['glasser_finish'];
    $glass_cost = $_POST['glass_cost'];
    $marble_required = $_POST['marble_required'];
    $marbler_name = $_POST['marbler_name'];
    $marbler_start = $_POST['marbler_start'];
    $marbler_finish = $_POST['marbler_finish'];
    $marble_cost = $_POST['marble_cost'];
    $makbad_required = $_POST['makbad_required'];
    $makbad_maker = $_POST['makbad_maker'];
    $makbad_start = $_POST['makbad_start'];
    $makbad_finish = $_POST['makbad_finish'];
    $makbad_cost = $_POST['makbad_cost'];
    $lights_required = $_POST['lights_required'];
    $lighter_name = $_POST['lighter_name'];
    $lighter_start = $_POST['lighter_start'];
    $lighter_finish = $_POST['lighter_finish'];
    $lights_cost = $_POST['lights_cost'];
    $stainless_required = $_POST['stainless_required'];
    $stainless_maker = $_POST['stainless_maker'];
    $stainless_start = $_POST['stainless_start'];
    $stainless_finish = $_POST['stainless_finish'];
    $stainless_cost = $_POST['stainless_cost'];
    $legs_required = $_POST['legs_required'];
    $legs_maker = $_POST['legs_maker'];
    $legs_start = $_POST['legs_start'];
    $legs_end = $_POST['legs_end'];
    $legs_cost = $_POST['legs_cost'];
    $boxes_drawers = $_POST['boxes_drawers'];
    $boxes_drawers_makers = $_POST['boxes_drawers_makers'];
    $boxes_drawers_start = $_POST['boxes_drawers_start'];
    $boxes_drawers_end = $_POST['boxes_drawers_end'];
    $boxes_drawers_cost = $_POST['boxes_drawers_cost'];
    $pipes_interiors = $_POST['pipes_interiors'];
    $pipes_interiors_maker = $_POST['pipes_interiors_maker'];
    $pipes_interiors_start = $_POST['pipes_interiors_start'];
    $pipes_interiors_end = $_POST['pipes_interiors_end'];
    $pipes_interiors_cost = $_POST['pipes_interiors_cost'];
    $iron_hinges = $_POST['iron_hinges'];
    $iron_hinges_maker = $_POST['iron_hinges_maker'];
    $iron_hinges_start = $_POST['iron_hinges_start'];
    $iron_hinges_end = $_POST['iron_hinges_end'];
    $iron_hinges_cost = $_POST['iron_hinges_cost'];
    $wheels_rails = $_POST['wheels_rails'];
    $wheels_rails_make = $_POST['wheels_rails_make'];
    $wheels_rails_start = $_POST['wheels_rails_start'];
    $wheels_rails_end = $_POST['wheels_rails_end'];
    $wheels_rails_cost = $_POST['wheels_rails_cost'];
    $drawers_tanged = $_POST['drawers_tanged'];
    $drawers_menaged = $_POST['drawers_menaged'];
    $drawers_tanged_start = $_POST['drawers_tanged_start'];
    $drawers_tanged_end = $_POST['drawers_tanged_end'];
    $drawers_tanged_cost = $_POST['drawers_tanged_cost'];
    $gifts = $_POST['gifts'];
    $gifts_maker = $_POST['gifts_maker'];
    $gifts_start = $_POST['gifts_start'];
    $gifts_end = $_POST['gifts_end'];
    $gifts_cost = $_POST['gifts_cost'];
    $additions = $_POST['additions'];
    $additions_cost = $_POST['additions_cost'];
    $total_cost = $_POST['total_cost'];
    $note = $_POST['note'];
    $sql = "UPDATE orders SET model='$order_model', type='$order_type', items='$order_items', nagar_required='$nagar_required', nagar_name='$nagar_name', nagar_start='$nagar_start', nagar_finish='$nagar_finish', nagar_cost='$nagar_cost', color_required='$color_required', estorgy_name='$estorgy_name', estorgy_start='$estorgy_start', estorgy_finish='$estorgy_finish', estorgy_cost='$estorgy_cost', tanged_required='$tanged_required', menaged_name='$menaged_name', menaged_start='$menaged_start', menaged_finish='$menaged_finish', menaged_cost='$menaged_cost', cloth_required='$cloth_required', clother_name='$clother_name', clother_start='$clother_start', clother_finish='$clother_finish', cloth_cost='$cloth_cost', glass_required='$glass_required', glasser_name='$glasser_name', glasser_start = '$glasser_start', glasser_finish='$glasser_finish', glass_cost='$glass_cost', marble_required='$marble_required', marbler_name='$marbler_name', marbler_start='$marbler_start', marbler_finish='$marbler_finish', marble_cost='$marble_cost', makbad_required='$makbad_required', makbad_maker='$makbad_maker', makbad_start='$makbad_start', makbad_finish='$makbad_finish', makbad_cost='$makbad_cost', lights_required='$lights_required', lighter_name='$lighter_name', lighter_start='$lighter_start', lighter_finish='$lighter_finish', lights_cost='$lights_cost', stainless_required='$stainless_required', stainless_maker='$stainless_maker', stainless_start='$stainless_start', stainless_finish='$stainless_finish', stainless_cost='$stainless_cost', legs_required='$legs_required', legs_maker='$legs_maker', legs_start='$legs_start', legs_end='$legs_end', legs_cost='$legs_cost', boxes_drawers='$boxes_drawers', boxes_drawers_makers='$boxes_drawers_makers', boxes_drawers_start='$boxes_drawers_start', boxes_drawers_end='$boxes_drawers_end', boxes_drawers_cost='$boxes_drawers_cost', pipes_interiors='$pipes_interiors', pipes_interiors_maker='$pipes_interiors_maker', pipes_interiors_start='$pipes_interiors_start', pipes_interiors_end='$pipes_interiors_end', pipes_interiors_cost='$pipes_interiors_cost', iron_hinges='$iron_hinges', iron_hinges_maker='$iron_hinges_maker', iron_hinges_start='$iron_hinges_start', iron_hinges_end='$iron_hinges_end', iron_hinges_cost='$iron_hinges_cost', wheels_rails='$wheels_rails', wheels_rails_make='$wheels_rails_make', wheels_rails_start='$wheels_rails_start', wheels_rails_end='$wheels_rails_end', wheels_rails_cost='$wheels_rails_cost', drawers_tanged='$drawers_tanged', drawers_menaged='$drawers_menaged', drawers_tanged_start='$drawers_tanged_start', drawers_tanged_end='$drawers_tanged_end', drawers_tanged_cost='$drawers_tanged_cost', gifts='$gifts', gifts_maker='$gifts_maker', gifts_start='$gifts_start', gifts_end='$gifts_end', gifts_cost='$gifts_cost', additions='$additions', additions_cost='$additions_cost', total_cost='$total_cost', note='$note' WHERE ID=$order_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: order_details.php?id=$order_id");
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
}
// Close the database connection
$conn->close();
?>
<a href="index.php" class="btn btn-danger" style="margin-left: 100px;"> رجوع </a>
