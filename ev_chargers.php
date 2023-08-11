<?php include 'header.php';
$data1 = [
    ['parameter' => 'Input', 'result' => '1-PHASE 3.3kW 230 V 20 Amp'],
    ['parameter' => 'Output', 'result' => '3.3 KW 16 AMP (230V)'],
    ['parameter' => 'Wires', 'result' => '3 wires (L, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196-2 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'Not Applicable'],
    ['parameter' => 'Updates', 'result' => 'No Updates'],
    ['parameter' => 'Charging Interface', 'result' => 'Type 2 Gun'],
    ['parameter' => 'Display', 'result' => 'LED Indicator - No Display'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'On/ Off Switch '],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'As per Standards '],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '130 X 110 X 160 mm (Box)'],
    ['parameter' => 'Weight', 'result' => '3.5 Kg'],
    ['parameter' => 'Cable Length', 'result' => '3 Mtr / 5 Mtr (Optional)'],
    ['parameter' => 'Safety parameter', 'result' => ''],
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '6 Months'],
    ['parameter' => 'Product Certificate', 'result' => 'No Certification'],
];
$data2 = [
    ['parameter' => 'Input', 'result' => ''],
    ['parameter' => 'Output', 'result' => ''],
    ['parameter' => 'Wires', 'result' => ''],
    ['parameter' => 'Output Connectors', 'result' => ''],
    ['parameter' => 'Ambient Temperatire', 'result' => ''],
    ['parameter' => '# outputs', 'result' => ''],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => ''],
    ['parameter' => 'Updates', 'result' => ''],
    ['parameter' => 'Charging Interface', 'result' => ''],
    ['parameter' => 'Display', 'result' => ''],
    ['parameter' => 'Connectivity', 'result' => ''],
    ['parameter' => 'IP Rating', 'result' => ''],
    ['parameter' => 'Mounting', 'result' => ''],
    ['parameter' => 'Cooling Method', 'result' => ''],
    ['parameter' => 'Push Button', 'result' => ''],
    ['parameter' => 'Communication between charger & vehicle', 'result' => ''],
    ['parameter' => 'user Authentication', 'result' => ''],
    ['parameter' => 'Dimension', 'result' => ''],
    ['parameter' => 'Weight', 'result' => ''],
    ['parameter' => 'Cable Length', 'result' => ''],
    ['parameter' => 'Safety parameter', 'result' => ''],
    ['parameter' => 'Over Current', 'result' => ''],
    ['parameter' => 'High Voltage', 'result' => ''],
    ['parameter' => 'Residual Current', 'result' => ''],
    ['parameter' => 'Surge Protection', 'result' => ''],
    ['parameter' => 'Leakage Protection', 'result' => ''],
    ['parameter' => 'Short Circuit', 'result' => ''],
    ['parameter' => 'Over Temperature', 'result' => ''],
    ['parameter' => 'Warranty', 'result' => ''],
    ['parameter' => 'Product Certificate', 'result' => ''],
];
?>
<!-- all page top header -->
<div class="top_header_all_page mb-5">
    <div class="top_header_all_page_img" style="background-image: url('img/evt.jpeg');"></div>
    <div class="top_header_all_page_inner">
        <div class="top_header_text_div">
            <h3>EV Chargers</h3>
            <div class="top_header_text_div_inner">
                <a href="index.php">index</a>
                <span><i class="fas fa-angle-double-right"></i></span>
                <p>EV Chargers</p>
            </div>
        </div>
    </div>
</div>
<!-- all page top header -->
<section class=" mb-5 container">

</section>
<!-- list  -->
<section class=" mb-5 container">
    <div class="title_index_about title_index_about2">
        <p><i class="fas fa-circle"></i> CHARGER DETAIL</p>
        <h3>
            Please select your preferred charger
        </h3>
    </div>
    <div class="coltact_us_about index_about_text_div">
        <p>
            Please select your preferred charger from wide range offered by us

        </p>
    </div>
    <div class="accordion ev_table_list mt-4" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo1">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                    3.3 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data1 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    7.4 KW Portable Type 2 (Guns 1)
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data2 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- list end -->
<!-- bg -->
<!-- <section class="bg_div mb-5">
    <div class="bg_div_inner">
        <div class="bg_div_inner_text">
            <h3>“Want to know what is best for you ?</h3>
            <a href="all_chargers.php" class="btn let_talk_btn">Click here For More Details</a>
        </div>
    </div>
</section> -->
<!-- bg end -->
<?php include 'footer.php'; ?>